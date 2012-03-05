<link rel="stylesheet" href="../css/style.css" type="text/css" />
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
}
?>