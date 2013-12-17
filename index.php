<?php
session_start();
require 'functions.php';
require 'sql.php';
?>
<html>
	<head>
		<title>Microblogging site</title>
		<link href='http://fonts.googleapis.com/css?family=Signika:400,300,700,600' rel='stylesheet' type='text/css'>
		<link href='css/main.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="headerWrapper">
		</div>
		<div id="contentWrapper">
			<div id="sidebarWrapper">
				<?php loadModule('profileImage'); ?>
				<?php loadModule('followCount'); ?>
			</div>
			<div id="timelineWrapper">
				<?php timelinePosts(); ?>
			</div>
		</div>
	</body>
</html>