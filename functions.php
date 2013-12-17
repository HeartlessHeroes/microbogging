<?php

function loadModule($switch){
	switch ($switch){
		case 'profileImage':
			echo '<div id="profileImage" class="sidebarModule"><img src="https://pbs.twimg.com/profile_images/378800000281645191/148c9aa0fb90a3d0a422e28a66786db5.jpeg" class="image"></div>';
			break;
		case 'followCount':
			echo '<div id="followCount" class="sidebarModule">Followers: 100<br>Following: 200</div>';
			break;
		case 'newPost':
			echo '<div id="newPost" class="sidebarModule"><textarea class="newPost curvedBorder" rows="1" cols="29" onfocus="this.rows=10;" onblur="this.rows=1;" style="resize: none;">Compose a new post...</textarea></div>';
			break;
	}
}

function timelinePosts($user = $_SESSION['user'], $offset = 0) {
	echo '<div class="timelineEntry">This is a text post.</div>';
}