<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}

		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(" AND ", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "mpc_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "cdm_tipo_documentos", "varname" => "mpc_at_localhost__cdm_tipo_documentos", "altvarname" => "cdm_tipo_documentos", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_audit", "varname" => "mpc_at_localhost__tik_audit", "altvarname" => "tik_audit", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_autorizadores", "varname" => "mpc_at_localhost__tik_autorizadores", "altvarname" => "tik_autorizadores", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_calendario", "varname" => "mpc_at_localhost__tik_calendario", "altvarname" => "tik_calendario", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_cfg", "varname" => "mpc_at_localhost__tik_cfg", "altvarname" => "tik_cfg", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_chat", "varname" => "mpc_at_localhost__tik_chat", "altvarname" => "tik_chat", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_chatau", "varname" => "mpc_at_localhost__tik_chatau", "altvarname" => "tik_chatau", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_documento", "varname" => "mpc_at_localhost__tik_documento", "altvarname" => "tik_documento", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_firmas", "varname" => "mpc_at_localhost__tik_firmas", "altvarname" => "tik_firmas", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_firmash", "varname" => "mpc_at_localhost__tik_firmash", "altvarname" => "tik_firmash", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_interno", "varname" => "mpc_at_localhost__tik_interno", "altvarname" => "tik_interno", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_memorando", "varname" => "mpc_at_localhost__tik_memorando", "altvarname" => "tik_memorando", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_memorando_adjunto", "varname" => "mpc_at_localhost__tik_memorando_adjunto", "altvarname" => "tik_memorando_adjunto", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_memorando_aut", "varname" => "mpc_at_localhost__tik_memorando_aut", "altvarname" => "tik_memorando_aut", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_memorando_aut_otrdep", "varname" => "mpc_at_localhost__tik_memorando_aut_otrdep", "altvarname" => "tik_memorando_aut_otrdep", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_memorando_l", "varname" => "mpc_at_localhost__tik_memorando_l", "altvarname" => "tik_memorando_l", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_memorando_pend", "varname" => "mpc_at_localhost__tik_memorando_pend", "altvarname" => "tik_memorando_pend", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_restulado", "varname" => "mpc_at_localhost__tik_restulado", "altvarname" => "tik_restulado", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_satisfaccion", "varname" => "mpc_at_localhost__tik_satisfaccion", "altvarname" => "tik_satisfaccion", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_tablas", "varname" => "mpc_at_localhost__tik_tablas", "altvarname" => "tik_tablas", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_tipo", "varname" => "mpc_at_localhost__tik_tipo", "altvarname" => "tik_tipo", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_tipomemo", "varname" => "mpc_at_localhost__tik_tipomemo", "altvarname" => "tik_tipomemo", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_uggroups", "varname" => "mpc_at_localhost__tik_uggroups", "altvarname" => "tik_uggroups", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_ugmembers", "varname" => "mpc_at_localhost__tik_ugmembers", "altvarname" => "tik_ugmembers", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "tik_ugrights", "varname" => "mpc_at_localhost__tik_ugrights", "altvarname" => "tik_ugrights", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "zdepartamentos", "varname" => "mpc_at_localhost__zdepartamentos", "altvarname" => "zdepartamentos", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "zmeses", "varname" => "mpc_at_localhost__zmeses", "altvarname" => "zmeses", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
			$dalTables[$conn->connId][] = array("name" => "zusuarios", "varname" => "mpc_at_localhost__zusuarios", "altvarname" => "zusuarios", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		}
	}


	public static function PrepareSQL($sql)
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}

			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			if ($conn->positionQuoted($sql, $offset))
				$repl["insert"] = $conn->addSlashes($val);
			else
				$repl["insert"] = DB::prepareNumberValue($val);

			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{(.*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

}

?>