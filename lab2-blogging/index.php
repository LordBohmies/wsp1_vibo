<?php

// We tell the page to require a file called functions
require 'resources/includes/view.php';
require 'resources/includes/model.php';

// Set header correct without using HTML
header("Content-type: text/html; charset=utf-8");

// Get value from url for key page
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

// Declare empty Variables to avoid problems
$content = '';
$template = 'page';

if(empty($page)) {
	$header = 'Start';
    $content = 'Välkommen till Labb 2! Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är andra labben men första labben i en serie labbar som tillsammans bygger vidare på detta projekt som vi påbörjar här. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.';
}
elseif($page == "blogg") {
    $header = 'Blogg';
	$template = 'all-blog-posts';
	$post = filter_input(INPUT_GET, 'post', FILTER_SANITIZE_URL);

	// En lösning, men ineffektiv.
	// if (!empty($post)) {
	// 	foreach ($model as $key => $value) {
	// 		if ($value['slug'] == $post) {
	// 			$template = 'single-blog-post';
	// 			$title = $value['title'];
	// 			$author = $value['author'];
	// 			$date = $value['date'];
	// 			$message = $value['text'];
	// 		}
	// 		else {
	// 			$error = 'Inlägget existerar inte längre!';
	// 		}
	// 	}
	// }

	if (array_key_exists($post, $model)) {
		$template = 'single-blog-post';
		$title = $model[$post]['title'];
		$author = $model[$post]['author'];
		$date = $model[$post]['date'];
		$message = $model[$post]['text'];
	}

	elseif(!empty($post)) {
		$header = 'ERROR - 404';
		$error = 'Den sökta sidan finns inte';
		$template = 'page';
	}

    
}
elseif($page == "kontakt") {
	$header = 'Kontakt';
    $content = 'Du når oss på epost@labb2.se';
}
else {
	$header = 'ERROR - 404';
	$error = "Den sökta sidan finns inte";
}
require "resources/templates/{$template}-template.php";

?>
