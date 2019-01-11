<?php
//Include Meta
require 'resources/includes/head.php';

//Include Header
require 'resources/views/header.php';

navigation($header);

//Content
echo <<<CONTENT
<div class="content">
    <h2>Alla blogginlägg</h2>
CONTENT;
// for ($i=0; $i < count($model); $i++) {
//     echo '<div class="post">';
//     echo '<h3>' $model[$i] '</h3>';
//     echo '</div>';
// }

foreach ($model as $key => $value) {
    $text = shorttext($value['text']);
    echo <<<POST
    <div class="post">
        <h3>{$value['title']}</h3>
        <p class="author">Författare: {$value['author']}</p>
        <p class="date">Datum: {$value['date']}</p>
        <p class="message">{$text}... <a href="index.php?page=blogg&post={$key}">Läs mer</a></p>
    </div>
POST;
}

echo <<<CONTENT
</div>
CONTENT;
//Inlcude Footer
require 'resources/views/footer.php';
?>
