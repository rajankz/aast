<div id="events-calendar" class="">
	<table id="events-table">
	<tbody>
		<?php
		$localpath = $GLOBALS['AAST_ROOT_PATH'];
		$localpath="";
		$eventsMainPath = $localpath . "/events.php";
		$xml = simplexml_load_file($localpath . "xmls/events.xml");

		foreach($xml->attributes() as $attributesKey => $attributesValue)
		{
			if($attributesKey == 'base_image')
				$base_image = $attributesValue;
		}

		//each child is a news item
		$itemCount = 5;
		foreach($xml->children() as $event)
		{
			if($itemCount-- > 0){
			$expireDate = strtotime((string)$event->expire_date);
			//if expire date is valid and less than current date then do not show this post
			if($expireDate && (time() > $expireDate)) 
				continue;

			$link_name = $event->link_name;
			$title = $event->title;
			$eventDate = strtotime((string)$event->event_date);
		?>   
			<tr>
				<td class="image">
					<div class="event-date">
						<div class="event-day"><?=date('d', $eventDate)?></div>
						<div class="event-month"><?=date('M', $eventDate)?></div>
					</div>

				</td>
				<td class="event-title"><a href="<?=$eventsMainPath."#".$link_name?>"><?=$title?></a>

				</td>
			</tr>
		<? } 
		  }?>
	</tbody></table>
</div>
<div class="clear-both"></div>
