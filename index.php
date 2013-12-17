<?php
if(empty(session_id())){
	session_start();
	if(!isset($_POST)){
		loginPage();
	} else {
		login();
	}
} else {
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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script>
		$('textarea.newPost')
		  .on('focus', function(){
		      var $this = $(this);
		      if($this.val() == 'Compose a new post...'){
		          $this.val('');
		      }
		  })
		  .on('blur', function(){
		      var $this = $(this);
		      if($this.val() == ''){
		          $this.val('Compose a new post...');
		      }
		  });
		</script>
	</html>
<?php
}
?>