<table id="hot-topics"><tbody>

<?php
$rootPath = $GLOBALS['AAST_HOME'];
$newsMainPath = $rootPath . "/stayConnected/index.php?p=newsAndEvents&";
$xml = simplexml_load_file($rootPath . "/xmls/newsAndEvents.xml");
$itemCount = 5;

//each child is a news item
$result = $xml->xpath('OneItem/NewsItem');
if($result)
foreach($result as $newsItem)
{
	if($itemCount-- <= 0)
		break;
	//$onHomePage = $newsItem->onHomePage;
	//if(strcmp('yes', strtolower($onHomePage))!=0)
	//	continue 1;
    $name = $newsItem->name;
    $title = $newsItem->title;
    $postingDate = strtotime((string)$newsItem->postingDate);
    $highlight = $newsItem->highlight;
?>   
    <tr>
        <!-- <td class="highlight-image"><img src="<?=$imageThumb?>" /></td> -->	
        <td class="oneNewsItem">
        	<div class="highlight-title">
        		<a href="<?=$newsMainPath."id=".$name?>"><?=$title?></a>
        	</div>
        	<!-- <div class="postedDate"><?=strftime('%d %b %Y',$postingDate)?></div> -->
            <div class="postedDate"><i>Posted: <? print strftime('%d %b %Y',$postingDate) ?></i></div>
            <div class="highlight-content"><?=$highlight?></div>
        </td>
    </tr>
<? } ?>
</tbody></table>
<div class="floatRight bold"><span><a href="">All News Items	...</a></span></div>