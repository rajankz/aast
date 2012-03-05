<!DOCTYPE html >
<?php
$rootPath = $GLOBALS['AAST_HOME'];
$xml = simplexml_load_file($rootPath . "/xmls/menu.xml");
?>

<div class="menu">
	<ul class="menu-list">
	<?php
	foreach($xml->children() as $menuListItems){	
		foreach($menuListItems->attributes() as $menuListAttribKey => $menuListAttribValue){
			if($menuListAttribKey=='name')
				$menuListItem=$menuListAttribValue;
			if($menuListAttribKey=='title')
				$title=$menuListAttribValue;	
		}
		?>
		<li><!-- <a class="menu-listItem" href=<?= $rootPath . '/'. $menuListItem . '/index.php?p=' . $menuListItem?> name=<?=$title?> > <?= $title?></a> -->
		<a class="menu-listItem" href=<?= $rootPath . '/'. $menuListItem ?> name=<?=$title?> > <?= $title?></a>
			<ul class="sub-list">
			<?php
			foreach($menuListItems->children() as $subListItems){
				foreach($subListItems->attributes() as $subListAttribKey => $subListAttribValue){
					if($subListAttribKey=='name')
						$subListItem=$subListAttribValue;
					if($subListAttribKey=='title')
						$title=$subListAttribValue;	
				}
			?>
				<li class="sub-listItem"><a name=<?=$subListItem?> href=<?= $rootPath . "/".$menuListItem."/index.php?p=".$subListItem?> title=<?=$title?>><?=$title?></a></li>
			<?php
			}
			?>
			</ul>  <!-- sub-list -->
		</li> <!-- menu-listItem -->
	<?php
	}
	?>
	</ul> <!-- menu-list -->
	<div id="aastSearch">
        <form method="get" action="http://www.searchum.umd.edu/search">
			<input type="hidden" name="site" value="UMCP"/>
			<input type="hidden" name="as_oq" value="site:aast.umd.edu" />
			<input type="hidden" name="client" value="UMCP"/>
			<input type="hidden" name="proxystylesheet" value="UMCP"/>
			<input type="hidden" name="output" value="xml_no_dtd"/>
			<input id="search" type="text" name="q" size="45" class="text" value="Search Asian American Studies"  onblur="if(this.value=='')this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue)this.value=''"/>

			<!-- <input type="image" class="button" src="http://www.umd.edu/wrapper/images/search.gif" alt="Search" /> -->
		</form>
	</div>
</div>
