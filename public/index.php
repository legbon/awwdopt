<?php
	$posts = [

		1 => [
			"id" => 1,
			"image" => "http://lorempixel.com/400/200",
			"title" => "This doggo needs a new home!",
			"posted_by" => "Labs",
			"content" => "This doggo needs a new home. \n She's a mutt, but she loves like a well bred mutt!"
		],

		2 => [
			"id" => 2,
			"image" => "http://lorempixel.com/400/200",
			"title" => "This floof needs a new home!",
			"posted_by" => "Labs",
			"content" => "This floof needs a new home. \n She's a cat. She hates everyone."
		]

	];
	if(!isset($_SERVER['PATH_INFO'])) {
		require('../src/views/index.php');
	} else {
		$path = $_SERVER['PATH_INFO'];
		switch($path) {
			case '/new':
				if(isset($_POST)) {
					// TODO: Add mysql post here, then redirect to new.
					$id = 1;
					header('Location: /post?id='.$id);
				}
				require('../src/views/new.php');
			break;
			case '/post':
				if(isset($_GET['id'])) {
					$post = $posts[$_GET['id']];
					require('../src/views/post.php');
				} else {
					require('../src/views/404.php');
				}
			break;
			default:
				require('../src/views/404.php');
			break;

		}
	}


?>