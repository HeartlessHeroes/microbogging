<?php

function login(){
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['pass'] = $_POST['pass'];
}

function loginPage(){
	echo '<form method="POST">';
	echo 'Username: <input type="text" name="user"><br>';
	echo 'Password: <input type="password" name="pass"><br>';
	echo '<input type="submit">';
	echo '</form>'
}

function loadModule($switch){
	switch ($switch){
		case 'profileImage':
			echo '<div id="profileImage" class="sidebarModule"><img src="/media/image/' . $_SESSION['user'] . '.png" class="image"></div>';
			break;
		case 'followCount':
			echo '<div id="followCount" class="sidebarModule">Followers: 100<br>Following: 200</div>';
			break;
		case 'newPost':
			echo '<div id="newPost" class="sidebarModule"><textarea class="newPost curvedBorder" rows="1" cols="29" onfocus="this.rows=5;" onblur="this.rows=1;" style="resize: none;overflow:hidden;">Compose a new post...</textarea></div>';
			break;
	}
}

function timelinePosts($array) {
	if (!$array['user']){
		$array['user'] = $_SESSION['user'];
	}
	if (!$array['offset']){
		$array['offset'] = 0;
	}
	echo '<div class="timelineEntry">This is a text post.</div>';
}