<?php 
	$GLOBALS['page']="downloadForm";
	include '../commons/master-page.php';
	if(isset($_GET['reportType']))
		$reportType = $_GET['reportType'];
	else
		$reportType = '';	
?>