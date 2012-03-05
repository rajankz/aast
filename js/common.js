

$(document).ready(function(){
$(".main_image .desc").show(); //Show Banner
$(".main_image .block").animate({ opacity: 0.9 }, 1 ); //Set Opacity

$(".image_thumb ul li:first").addClass('active'); //Add the active class (highlights the very first list item by default)
$(".image_thumb ul li").click(function(){
    //Set Variables
    var imgAlt = $(this).find('img').attr("alt"); //Get Alt Tag of Image
    var imgTitle = $(this).find('a').attr("href"); //Get Main Image URL
    var imgDesc = $(this).find('.block').html();  //Get HTML of the "block" container
    var imgDescHeight = $(".main_image").find('.block').height(); //Find the height of the "block"

    if ($(this).is(".active")) {  //If the list item is active/selected, then...
        return false; // Don't click through - Prevents repetitive animations on active/selected list-item
    } else { //If not active then...
        //Animate the Description
		$(".main_image img").animate({ opacity: 0}, 250);
        $(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() { //Pull the block down (negative bottom margin of its own height)
            $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,  marginBottom: "0" }, 250 ); //swap the html of the block, then pull the block container back up and set opacity
            $(".main_image img").attr({ src: imgTitle , alt: imgAlt}).animate({ opacity: 1}, 250); //Switch the main image (URL + alt tag)
        });
    }
    //Show active list-item
    $(".image_thumb ul li").removeClass('active'); //Remove class of 'active' on all list-items
    $(this).addClass('active');  //Add class of 'active' on the selected list
    return false; 

}) .hover(function(){ //Hover effects on list-item 
    $(this).addClass('hover'); //Add class "hover" on hover 
    }, function() {
    $(this).removeClass('hover'); //Remove class "hover" on hover out
});


$("a.collapse").click(function(){
    $(".main_image .block").slideToggle(); //Toggle the description (slide up and down)
    $("a.collapse").toggleClass("show"); //Toggle the class name of "show" (the hide/show tab)
	return false;
});



	$.fn.replacePageContent = ReplacePageContent;
	//$.fn.loadPageContent = LoadPageContent;

	
	$(document.getElementById('page-content')).ready(function() {
		//var path = $(this).loadPageContent();
		//$('.side-menu-items ul li').removeClass('active-side-menu');
		//$('.side-menu-items ul li a[name='+path+']').parent().addClass('active-side-menu');
		
	var linkName = document.getElementById("pageContentLink").value;
	var pageExt = document.getElementById("pageExt").value;
	
	if(pageExt=="")
		pageExt="html";

	//if no linkname then get the foldername
	/*
	if(linkName==""){
		var linkName = window.location.pathname;
		var index = linkName.indexOf("/index.php");
		if(index !=-1){
			linkName = linkName.substring(0, index);
			linkName = linkName.substring(linkName.lastIndexOf("/")+1);
		}
	}*/
	$('#page-content').innerHTML="";
	
	/*$('#page-content').load(linkName +".html", function(response,status,xhr){
		if(status=="error"){
			$('#page-content').load(linkName+".php");
		}
	});*/
	$('#page-content').load(linkName +"." +pageExt);
	$('#page-content').fadeIn();
	
	$('.side-menu-items ul li').removeClass('active-side-menu');
	$('.side-menu-items ul li a[name='+linkName+']').parent().addClass('active-side-menu');
		
	});

});

function ReplacePageContent(linkName){
	$('#page-content').innerHTML="";
	$('#page-content').load(linkName +".html", function(response,status,xhr){
		if(status=="error"){
			$('#page-content').load(linkName+".php");
		}
	});
	$('#page-content').fadeIn();
	
	$('.side-menu-items ul li').removeClass('active-side-menu');
	$('.side-menu-items ul li a[name='+linkName+']').parent().addClass('active-side-menu');
	
}
/*
function LoadPageContent(){
	var pageLink = window.location.search;
	var path = window.location.pathname;
	var index = path.indexOf("index.php");
	if(index !=-1){
		path = path.substring(0, index);
	}
	if(path.substring(path.length-1)=="/")
		path = path.substring(0,path.lastIndexOf("/"));
	if(pageLink != "")
	{
		var pageName=pageLink.substring(pageLink.indexOf("p="));
		if(pageName != ""){
			pageName=(pageName.indexOf("&")!=-1)?pageName.substring(0,pageName.indexOf("&")):pageName;
			pageName=pageName.substring(2);
			path = pageName;
		}
	}
	ReplacePageContent(path);
	return path;
}
/*
function LoadPageContent(){
	var pageLink = window.location.search;

	var locationObj = window.location;
	var locationObjStr = locationObj.toString();
	var index = locationObjStr.indexOf("index.php");
	if(index !=-1){
		locationObjStr = locationObjStr.substring(0, index);
	}
	if(locationObjStr.substring(locationObjStr.length-1)=="/")
		locationObjStr=locationObjStr.substring(0,locationObjStr.length-1);
	window.location="";
	window.location=locationObjStr+pageLink;
	
	var path = locationObjStr.substring(locationObjStr.lastIndexOf("/")+1);
	if(pageLink != "")
	{
		path = pageLink.substring(3);
	}
	ReplacePageContent(path);
	return path;
}
*/