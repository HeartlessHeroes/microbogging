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
				<div class="sidebarModule profileImage"><img src="https://pbs.twimg.com/profile_images/378800000281645191/148c9aa0fb90a3d0a422e28a66786db5.jpeg" class="image"></div>
			</div>
			<div id="timelineWrapper">
				<?php timelinePosts(); ?>
			</div>
		</div>
	</body>
</html>