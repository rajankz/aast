<table id="hot-topics"><tbody>

<?php
$rootPath = $GLOBALS['AAST_HOME'];
$newsMainPath = $rootPath . "/stayConnected/index.php?p=newsAndEvents&";
$xml = simplexml_load_file($rootPath . "/xmls/news.xml");

$defaultImageThumb = "";
$defaultImageThumb1 = "";
$defaultImageThumb2 = "";
$defaultImage = "";

foreach($xml->attributes() as $attributesKey => $attributesValue)
{
    if($attributesKey == 'default_image_thumb1')
        $defaultImageThumb1 = $attributesValue;
    if($attributesKey == 'default_image_thumb2')
        $defaultImageThumb2 = $attributesValue;
    if($attributesKey == 'default_image')
        $defaultImage = $attributesValue;
}

//each child is a news item
foreach($xml->children() as $newsItem)
{
    $expireDate = strtotime((string)$newsItem->expire_date);
    //if expire date is valid and less than current date then do not show this post
    if($expireDate && (time() > $expireDate)) 
        continue;
    $imageThumb = $newsItem->image_thumb;
    if($imageThumb == ''){
        if(strcmp($defaultImageThumb, $defaultImageThumb1) != 0 )
            $defaultImageThumb = $defaultImageThumb1;
        else
            $defaultImageThumb = $defaultImageThumb2;
            
        $imageThumb = $defaultImageThumb;
    }
    $name = $newsItem->name;
    $title = $newsItem->title;
    $postingDate = strtotime((string)$newsItem->posting_date);
    $highlight = $newsItem->highlight;
?>   
    <tr>
        <!-- <td class="highlight-image"><img src="<?=$imageThumb?>" /></td> -->	
        <td class="oneNewsItem">
        	<div class="highlight-title">
        		<a href="<?=$newsMainPath."id=".$name?>"><?=$title?></a>
        	</div>
        	<!-- <div class="postedDate"><?=strftime('%d %b %Y',$postingDate)?></div> -->
            <i>Posted, <? print strftime('%d %b %Y',$postingDate) ?></i><br />
            <div class="highlight-content"><?=$highlight?></div>
        </td>
    </tr>
<? } ?>
</tbody></table>
<div class="floatRight bold"><span><a href="">All News Items	...</a></span></div>