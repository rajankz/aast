<?php
$rootPath = $GLOBALS['AAST_ROOT_PATH'];
$selected = $_GET['p'];
?>

<div class="side-menu-title">About</div>

<div class="side-menu-items">
	<ul>
		<li><a name="mission" href=<?=$rootPath . "/about?p=mission" ?>>Mission</a></li>
		<li><a name="directorsWelcome" href="../about?p=directorsWelcome">Director's Welcome</a></li>
		<li><a name="alumni" href="?p=alumni">Alumni</a></li>
		<li><a name="contactUs" href="../about?p=contactUs">Contact Us</a></li>
	</ul>
</div>
