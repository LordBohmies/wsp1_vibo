
<?php
// Include Meta
require ('resources/includes/head.php');

// Include Header
require ('resources/views/header.php');

navigation($header);

// Old way from Beginning
//echo $content;

// Content - New way for Blogging
echo <<<CONTENT
    <div class="content">
        {$content}
    </div>
CONTENT;

// Inlcude Footer
require ('resources/views/footer.php');
?>
