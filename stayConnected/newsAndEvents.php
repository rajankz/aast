<?php
$id=$_GET['id'];
if($id!=""){
	if(file_exists("newsAndEvents/".$id.".html"))
	{
		$GLOBALS['page']="newsAndEvents/".$id;
	}
	else
	{
		$GLOBALS['page']="newsAndEvents/error";
	}
	include '../commons/master-page.php';
}else{
	$GLOBALS['page'] = 'allNewsAndEvents';
	$GLOBALS['pageExt'] = 'php';
	include '../commons/master-page.php';
}
?>