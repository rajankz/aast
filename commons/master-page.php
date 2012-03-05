<!DOCTYPE html >
<?php
$GLOBALS['AAST_HOME'] = "http://localhost/~rajankz/aast";
?>

<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21508352-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index,follow" />
<meta name="description" content="Official Site of the Asian American Studies Program, University of Maryland" />
<meta name="keywords" content="Asian American Studies Program, AAST, Asian American Studies" />
<!--
<link rel="stylesheet" href="../css/menu_style.css" type="text/css" />
<link rel="stylesheet" href="../front_new_files/globalv3.css" type="text/css" />
<link rel="stylesheet" href="http://www.umd.edu/wrapper/css/xhtml-962px.css" />
<link media="all" href="../front_new_files/widget21.css" type="text/css" rel="stylesheet" />
-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="../js/xbreadcrumbs.js"></script>
<script type="text/javascript" src="../js/common.js"></script>

<link rel="stylesheet" href="../css/fonts.css" type="text/css" charset="utf-8" />
<link rel="shortcut icon" href="../favicon.ico" />
<!-- <link rel="stylesheet" href="http://www.umd.edu/wrapper/css/xhtml-962px.css" /> -->
<link rel="stylesheet" href="../css/xhtml-962px.css" type="text/css" />
<link rel="stylesheet" href="../css/menu_style.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="../css/jquery-ui-1.8.16.custom.css" type="text/css" />
<link rel="stylesheet" href="../css/xbreadcrumbs.css" type="text/css" />

<title>About Asian American Studies| University of Maryland</title>

<!-- End head.php -->
	<!--[if lt IE 7]>
	<link type="text/css" rel="stylesheet" href="/lib/css/iepc6v2.css" />
	<![endif]-->
	<!--[if IE 7]>
	<link type="text/css" rel="stylesheet" href="/lib/css/iepc7v2.css" />
	<![endif]-->
<!-- End s_all/head.php -->

<script type="text/javascript">
     $(document).ready(function(){
          $('#breadcrumbs').xBreadcrumbs();
     });
</script>

    
</head>

<body>
    <div id="umd-frame">
        <div id="umd-frame-header">
            <a href="http://www.umd.edu/"><img src="http://www.umd.edu/wrapper/images/header-um-logo.gif" alt="University of Maryland" id="umd-frame-logo" /></a>
                <?php include '../commons/navcontainer-one.php' ?>
        </div>
        <div id="umd-frame-header-end"></div>

        <div id="aast">    
            <div id="aast-banner">
                <?php include '../commons/aast-banner.php' ?>
                <div style="clear:both"></div>
            </div>            
            <div id="aast-menu">
                <?php include '../commons/menu.php' ?>
                <div style="clear: both;"></div>
            </div>
			
            <div id="content" class="shadow">
				<div class="left-module">
					<div id="left-module-items">
						<?php include('../commons/side-menu.php') ?>
					</div>
				</div>
				
				<div class="right-module">
					<div id="right-module-content">
					<input type="hidden" id="pageContentLink" name="pageContentLink" value="<?=$GLOBALS['page']?>" />
					<input type="hidden" id="pageExt" name="pageExt" value="<?=$GLOBALS['pageExt']?>" />
					<div id="page-content"> <!-- onload=loadPageContent();> -->
					</div>
					</div>
				</div>

            </div>
            <?php include('../commons/footer.php') ?>
        </div>
    </div>
</body>
</html>