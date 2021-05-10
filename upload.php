<?php
require_once("include/dbcommon.php");

if(@$_POST["a"]=="delete"){
	if(@$_SESSION["saveto"] == "database")
		unlink(getabspath($_POST["file"]));
	die();
}
	

$UPLOAD_DIR = @$_SESSION["folder"]."\/";
if(!file_exists($UPLOAD_DIR) && @$_SESSION["saveto"] != "database")
	@mkdir($UPLOAD_DIR);
$img = $_POST['file'];

$ext = 'png';
if(strpos ($img,'data:image/jpeg;base64,')!==false)$ext = 'jpeg';
if(strpos ($img,'data:image/jpg;base64,')!==false)$ext = 'jpg';
if(strpos ($img,'data:image/bmp;base64,')!==false)$ext = 'bmp';
if(strpos ($img,'data:image/png;base64,')!==false)$ext = 'png';
if(strpos ($img,'data:image/gif;base64,')!==false)$ext = 'gif';

$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace('data:image/jpg;base64,', '', $img);
$img = str_replace('data:image/bmp;base64,', '', $img);
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace('data:image/gif;base64,', '', $img);

$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
if(@$_SESSION["saveto"] == "database"){
	$file = 'templates_c/snapshot_'. uniqid() .'.png';
	$file_tmp = str_replace ("\\","",$file); 
	$_SESSION["snapfile"] = $file;
}
else{
	$file = $UPLOAD_DIR.$_POST['filename'].'_'. uniqid() .'.'.$ext;
	$file_tmp = str_replace ("\\","",$file); 
}	 
runner_save_file($file_tmp, $data);
$size = filesize($file_tmp);

echo $file_tmp.','.$size;

//delete previous snapshot form server
$delfile = @$_POST['pleasedeletefile'];
$delfile_tmp = str_replace ("\\","",$delfile); 

if($delfile_tmp != ''){
   //$delfile = str_replace ("\\","",$delfile); 
	unlink($delfile_tmp);
}

?>