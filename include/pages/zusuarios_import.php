<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'Usuario',
'Clave',
'Nombre',
'Puesto',
'Correo',
'FechaInicio',
'FechaFinal',
'Estado',
'CodigoDepto',
'Codigo_Estructura',
'Area',
'Telefono' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Usuario' => array( 'import_field' ),
'Clave' => array( 'import_field1' ),
'Nombre' => array( 'import_field2' ),
'Puesto' => array( 'import_field4' ),
'Correo' => array( 'import_field5' ),
'FechaInicio' => array( 'import_field6' ),
'FechaFinal' => array( 'import_field7' ),
'Estado' => array( 'import_field8' ),
'CodigoDepto' => array( 'import_field9' ),
'Codigo_Estructura' => array( 'import_field3' ),
'Area' => array( 'import_field10' ),
'Telefono' => array( 'import_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field3',
'import_field10',
'import_field11' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field3' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field3',
'import_field10',
'import_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field3',
'import_field10',
'import_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'Usuario',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'Clave',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'Nombre',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'Puesto',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'Correo',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'FechaInicio',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'FechaFinal',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'Estado',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'CodigoDepto',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'Codigo_Estructura',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'Area',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'Telefono',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>