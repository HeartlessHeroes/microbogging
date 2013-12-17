<?php
session_start();
$_SESSION['user'] = 'tyler';
require 'functions.php';
require 'sql.php';
?>
<html>
	<head>
		<title>Microblogging site</title>
		<link href='http://fonts.googleapis.com/css?family=Signika:400,300,700,600' rel='stylesheet' type='text/css'>
		<link href='css/main.css' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	</head>
	<body>
		<div id="headerWrapper">
		</div>
		<div id="contentWrapper">
			<div id="sidebarWrapper" class="curvedBorder">
				<?php loadModule('profileImage'); ?>
				<?php loadModule('followCount'); ?>
				<?php loadModule('newPost'); ?>
			</div>
			<div id="timelineWrapper" class="curvedBorder">
				<?php timelinePosts(NULL); ?>
			</div>
		</div>
	</body>
</html>