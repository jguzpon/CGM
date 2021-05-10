<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("zusuarios");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblmpc_at_localhost__cdm_tipo_documentos;
	var $tblmpc_at_localhost__tik_audit;
	var $tblmpc_at_localhost__tik_autorizadores;
	var $tblmpc_at_localhost__tik_calendario;
	var $tblmpc_at_localhost__tik_cfg;
	var $tblmpc_at_localhost__tik_chat;
	var $tblmpc_at_localhost__tik_chatau;
	var $tblmpc_at_localhost__tik_documento;
	var $tblmpc_at_localhost__tik_firmas;
	var $tblmpc_at_localhost__tik_firmash;
	var $tblmpc_at_localhost__tik_interno;
	var $tblmpc_at_localhost__tik_memorando;
	var $tblmpc_at_localhost__tik_memorando_adjunto;
	var $tblmpc_at_localhost__tik_memorando_aut;
	var $tblmpc_at_localhost__tik_memorando_aut_otrdep;
	var $tblmpc_at_localhost__tik_memorando_l;
	var $tblmpc_at_localhost__tik_memorando_pend;
	var $tblmpc_at_localhost__tik_restulado;
	var $tblmpc_at_localhost__tik_satisfaccion;
	var $tblmpc_at_localhost__tik_tablas;
	var $tblmpc_at_localhost__tik_tipo;
	var $tblmpc_at_localhost__tik_tipomemo;
	var $tblmpc_at_localhost__tik_uggroups;
	var $tblmpc_at_localhost__tik_ugmembers;
	var $tblmpc_at_localhost__tik_ugrights;
	var $tblmpc_at_localhost__zdepartamentos;
	var $tblmpc_at_localhost__zmeses;
	var $tblmpc_at_localhost__zusuarios;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "cdm_tipo_documentos", "varname" => "mpc_at_localhost__cdm_tipo_documentos", "altvarname" => "cdm_tipo_documentos", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_audit", "varname" => "mpc_at_localhost__tik_audit", "altvarname" => "tik_audit", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_autorizadores", "varname" => "mpc_at_localhost__tik_autorizadores", "altvarname" => "tik_autorizadores", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_calendario", "varname" => "mpc_at_localhost__tik_calendario", "altvarname" => "tik_calendario", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_cfg", "varname" => "mpc_at_localhost__tik_cfg", "altvarname" => "tik_cfg", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_chat", "varname" => "mpc_at_localhost__tik_chat", "altvarname" => "tik_chat", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_chatau", "varname" => "mpc_at_localhost__tik_chatau", "altvarname" => "tik_chatau", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_documento", "varname" => "mpc_at_localhost__tik_documento", "altvarname" => "tik_documento", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_firmas", "varname" => "mpc_at_localhost__tik_firmas", "altvarname" => "tik_firmas", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_firmash", "varname" => "mpc_at_localhost__tik_firmash", "altvarname" => "tik_firmash", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_interno", "varname" => "mpc_at_localhost__tik_interno", "altvarname" => "tik_interno", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_memorando", "varname" => "mpc_at_localhost__tik_memorando", "altvarname" => "tik_memorando", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_memorando_adjunto", "varname" => "mpc_at_localhost__tik_memorando_adjunto", "altvarname" => "tik_memorando_adjunto", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_memorando_aut", "varname" => "mpc_at_localhost__tik_memorando_aut", "altvarname" => "tik_memorando_aut", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_memorando_aut_otrdep", "varname" => "mpc_at_localhost__tik_memorando_aut_otrdep", "altvarname" => "tik_memorando_aut_otrdep", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_memorando_l", "varname" => "mpc_at_localhost__tik_memorando_l", "altvarname" => "tik_memorando_l", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_memorando_pend", "varname" => "mpc_at_localhost__tik_memorando_pend", "altvarname" => "tik_memorando_pend", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_restulado", "varname" => "mpc_at_localhost__tik_restulado", "altvarname" => "tik_restulado", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_satisfaccion", "varname" => "mpc_at_localhost__tik_satisfaccion", "altvarname" => "tik_satisfaccion", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_tablas", "varname" => "mpc_at_localhost__tik_tablas", "altvarname" => "tik_tablas", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_tipo", "varname" => "mpc_at_localhost__tik_tipo", "altvarname" => "tik_tipo", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_tipomemo", "varname" => "mpc_at_localhost__tik_tipomemo", "altvarname" => "tik_tipomemo", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_uggroups", "varname" => "mpc_at_localhost__tik_uggroups", "altvarname" => "tik_uggroups", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_ugmembers", "varname" => "mpc_at_localhost__tik_ugmembers", "altvarname" => "tik_ugmembers", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "tik_ugrights", "varname" => "mpc_at_localhost__tik_ugrights", "altvarname" => "tik_ugrights", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "zdepartamentos", "varname" => "mpc_at_localhost__zdepartamentos", "altvarname" => "zdepartamentos", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "zmeses", "varname" => "mpc_at_localhost__zmeses", "altvarname" => "zmeses", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
		$this->lstTables[] = array("name" => "zusuarios", "varname" => "mpc_at_localhost__zusuarios", "altvarname" => "zusuarios", "connId" => "mpc_at_localhost", "schema" => "", "connName" => "mpc at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>