<?php
//todo: we need to remove the below line and be able to access AAST_HOME from anywhere
$GLOBALS['AAST_HOME'] = "http://localhost/~rajankz/aast";
$rootPath = $GLOBALS['AAST_HOME'];
$newsMainPath = $rootPath . "/stayConnected/newsAndEvents.php?id=";

	?>
	<div id="single-content">
	<h1>News and Events</h1>
	<?php

	
	$xml = simplexml_load_file($rootPath . "/xmls/newsAndEvents.xml");
	$result = $xml->xpath('OneItem');
	
	if($result){
	?>
		<div id="allNewsAndEvents">
	<?php
		$monthYear="";
		foreach($result as $oneItem){
			$item=$oneItem->xpath('NewsItem');
			if(!$item)
				$item=$oneItem->xpath('OneEvent');
				
			if($item){
				foreach($item as $child){
					$name = $child->name;
					$title = $child->title;
					$postingDate = strtotime((string)$child->postingDate);
				}
				if($monthYear!=strftime("%B %Y", $postingDate)){
					$monthYear = strftime("%B %Y", $postingDate);
					echo '<br /><h3 class="monthYear blueTitle">'.$monthYear.'</h3>';
				}
				?>
				<div class="highlight-title"><a href="<?=$newsMainPath.$name?>"><?=$title?></a></div>
				<div class="postedDate"><i>Posted: <? print strftime('%d %b %Y',$postingDate) ?></i></div>
        		<?php
			}
		}
		?>
		</div>
		<?php
	}
	?>
	</div>