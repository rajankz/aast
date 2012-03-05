<?php
$phpSelf=$_SERVER['PHP_SELF'];
$section=substr($phpSelf,0, strrpos($phpSelf, '/'));
$section=substr($section, strrpos($section, '/')+1);
$rootPath = $GLOBALS['AAST_HOME'];
$xml = simplexml_load_file($rootPath . "/xmls/menu.xml");

$menuListItem=$section;

$found=0;
foreach($xml->children() as $menuListItems){	
	foreach($menuListItems->attributes() as $menuListAttribKey => $menuListAttribValue){
	if($menuListAttribKey=='name' && $menuListAttribValue==$menuListItem)
		$found=1;
		break;
	}
	if($found)
		break;
}
	foreach($menuListItems->attributes() as $menuListAttribKey => $menuListAttribValue){
		if($menuListAttribKey=='title'){
			$title=$menuListAttribValue;
			break;
		}		
	}

?>

<div class="side-menu-title"><a name=<?=$title?> href=<?=$rootPath."/".$menuListItem?>><?=$title?></a></div>
<div class="side-menu-items">
	<ul>
	<?php
	foreach($menuListItems->children() as $subListItems){
		foreach($subListItems->attributes() as $subListAttribKey => $subListAttribValue){
			if($subListAttribKey=='name')
				$subListItem=$subListAttribValue;
			if($subListAttribKey=='title')
				$title=$subListAttribValue;	
		}
	?>
		<li><a name=<?=$subListItem?> href=<?=$rootPath."/".$menuListItem."/".$subListItem.".php"?>><?=$title?></a></li>
	<?php
	}
	?>
	</ul>
</div>
