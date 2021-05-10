<?php 
class EditSnapshotCam extends UserControl
{
	function initUserControl()
	{
		$_SESSION["folder"] = "files";
		$_SESSION["saveto"] = "database";
		if (isset($this->settings["folder"]))
			$_SESSION["folder"] = $this->settings["folder"];
		if (isset($this->settings["saveto"]))
			$_SESSION["saveto"] = $this->settings["saveto"];
	}
	
	function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data)
	{

        if(@$_SESSION["saveto"] == "database" && $value){
			$_SESSION["snapfile"] = 'templates_c/snapshot_'. uniqid() .'.png';
			runner_save_file($_SESSION["snapfile"],$value);
			$value = "[".my_json_encode(array("name" => $_SESSION["snapfile"],"usrName" => str_replace("templates_c/","",$_SESSION["snapfile"]),"size" => filesize($_SESSION["snapfile"]),"type" => "image/png","searchStr" => str_replace("templates_c/","",$_SESSION["snapfile"]),"!" => "sStrEnd"))."]";
		}
		echo $this->getSetting("label").'<input id="'.$this->cfield.'" name="'.$this->cfield.'" class="HIDE_SNAPSHOTCAM_FIELD" '.$this->inputStyle.' type="text" '
			.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
			.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
			.' '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
			.htmlspecialchars($value).'" />';
             
                include('embed.php');

	}
	
	function getUserSearchOptions()
	{
		return array(EQUALS, STARTS_WITH, NOT_EMPTY, NOT_EQUALS);		
	}

	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
	}
                
       	function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
		{         
			$this->getPostValueAndType();
			if (FieldSubmitted($this->goodFieldName."_".$this->id)){
				if(@$_SESSION["saveto"] == "database"){
					$json = json_decode($this->webValue)[0];
					$this->webValue = myfile_get_contents(getabspath($json->name));
					if($_SESSION["snapfile"])
						unlink(getabspath($_SESSION["snapfile"]));
				}
				$this->webValue = prepare_for_db($this->field, $this->webValue, $this->webType);
			}else{
				$this->webValue = false;
			}
			if(!($this->webValue===false))
			{
				$avalues[$this->field] = $this->webValue;
			}
		} 	

}
?>