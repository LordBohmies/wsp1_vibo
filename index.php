<?php 
/**
 * Page Controller for everything
 */


// We tell the page to require a file called functions
require 'resources/includes/view.php';
require 'resources/includes/model.php';

// Set header correct without using HTML
header("Content-type: text/html; charset=utf-8");

// Get value from url for key page
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

// Declare empty Variables to avoid problems
$h1span = '';
$content = '';

if (empty($page)) {
    $h1span = 'Bohmies.se';
    $content = '';
 
}

elseif ($page === 'about') {
    // code...
}

else {
    header("HTTP/1.0 404 Not Found");
    $h1span = 'Sidan finns inte (404)';
    $content = '<p>Du verkar ha angivit en ogiltig URL.</p>';
}
require "resources/templates/{$template}-template.php";

?>