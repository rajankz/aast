<div id="events-calendar" class="rounded">
	<table id="events-table">
	<tbody>
		<?php
		$localpath = $GLOBALS['AAST_ROOT_PATH'];
		$eventsMainPath = $localpath . "events.php";
		$xml = simplexml_load_file($localpath . "/xmls/events.xml");

		foreach($xml->attributes() as $attributesKey => $attributesValue)
		{
			if($attributesKey == 'base_image')
				$base_image = $attributesValue;
		}

		//each child is a news item
		foreach($xml->children() as $event)
		{
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
					
					<!--<div class="calendar-icon-<?=date('m', $eventDate)?>">
						<div class="events-day"><?=date('d', $eventDate)?></div>
					</div> -->
				<!-- <img src="media/images/calendar/<?//=date('m', $eventDate)?>.gif" /> -->
				</td>
				<td class="event-title"><a href="<?=$eventsMainPath."#".$link_name?>"><?=$title?></a>
					<!--<i>[Posted on <? //print date("d M", $postingDate) ?>]</i><br /> 
					<div class="highlight"><?//=$highlight?></div> -->
				</td>
			</tr>
		<? } ?>
	</tbody></table>
</div>
<div class="clear-both"></div>
