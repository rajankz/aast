<!--
 _______                _                   ________                __                       _          __       
|_   __ \              (_)                 |  __   _|              [  |                     (_)        [  |      
  | |__) |   ,--.      __  ,--.   _ .--.   |_/  / /   ,--.   .---.  | |--.   ,--.   _ .--.  __   ,--.   | |--.   
  |  __ /   `'_\ :    [  |`'_\ : [ `.-. |     .'.' _ `'_\ : / /'`\] | .-. | `'_\ : [ `/'`\][  | `'_\ :  | .-. |  
 _| |  \ \_ // | |, _  | |// | |, | | | |   _/ /__/ |// | |,| \__.  | | | | // | |, | |     | | // | |, | | | |  
|____| |___|\'-;__/[ \_| |\'-;__/[___||__] |________|\'-;__/'.___.'[___]|__]\'-;__/[___]   [___]\'-;__/[___]|__] 
                    \____/                                                                                       
-->
<!DOCTYPE html >
<?php
$GLOBALS['AAST_HOME'] = "http://localhost/~rajankz/aast";
//$GLOBALS['AAST_ROOT_PATH'] = "rajanzachariah.com/aast";

if($_GET["page"]=="mission")

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Asian American Studies Program Home</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/tinyfader.js"></script>


<script type="text/javascript">
/*
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21508352-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
*/

</script>

<meta name="author" content="Rajan K. Zachariah" />
<meta name="description" content="Official Site of the Asian American Studies Program, University of Maryland" />
<meta name="keywords" content="Asian American Studies Program, AAST, Asian American Studies" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<meta name="robots" content="index,follow" />
<meta name="document-state" content="Dynamic" />
<meta http-equiv="Content-Language" content="EN-US" />

<link rel="stylesheet" href="css/fonts.css" type="text/css" charset="utf-8" />
<link rel="shortcut icon" href="./favicon.ico" />
<link rel="stylesheet" href="http://www.umd.edu/wrapper/css/xhtml-962px.css" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/fader.css" type="text/css" />
<link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" type="text/css" />

<!-- Backward Compatability -->
<!--[if lt IE 7]>
    <link type="text/css" rel="stylesheet" href="./lib/css/iepc6v2.css" />
<![endif]-->
<!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="./lib/css/iepc7v2.css" />
<![endif]-->

</head>

<body>
    <div id="umd-frame">
        <div id="umd-frame-header">
            <a href="http://www.umd.edu/"><img src="http://www.umd.edu/wrapper/images/header-um-logo.gif" alt="University of Maryland" id="umd-frame-logo" /></a>
                <?php include './commons/navcontainer-one.php' ?>
        </div>
        <div id="umd-frame-header-end"></div>

        <div id="aast">    
            <div id="aast-banner">
                <?php include './commons/aast-banner.php' ?>
                <div style="clear:both"></div>
            </div>            
            <div id="aast-menu">
                <?php include './commons/menu.php' ?>

                <div style="clear: both;"></div>
            </div>
            <div id="content">
                    <?php include './commons/image-slider.php' ?>
			
                <div id="content-left">
                    <?php include './commons/content-left.php' ?>
                </div>                
                <div id="content-right">
                    <?php include './commons/content-right.php' ?>
                </div>
				<div class="clear-both"></div>
            </div>
            <?php include('./commons/footer.php') ?>
        </div>
    </div>
</body>
</html>