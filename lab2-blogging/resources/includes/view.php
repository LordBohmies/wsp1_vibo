<?php
// Declare name of the laboration
$heading = 'Blogging';

// Give Active Navigation the class="highligt"
function navigation($highlight) {
    $start = '';
    $kontakt = '';
    $blogg = '';

    if($highlight == 'Start') {
        $start = 'class="highlight"';
    }
    elseif($highlight == 'Kontakt') {
        $kontakt = 'class="highlight"';
    }
    elseif($highlight == 'Blogg') {
        $blogg = 'class="highlight"';
    }

    echo <<<NAV
        <nav>
            <ul>
                <li><a {$start} href="index.php">Start</a></li>
			    <li><a {$blogg} href="index.php?page=blogg">Blogg</a></li>
			    <li><a {$kontakt} href="index.php?page=kontakt">Kontakt</a></li>
		    </ul>
	    </nav>
NAV;
}

// Function for Copyright
function echoYear(){
    $year = date('Y');

    if ($year == 2017) {
        echo 'copyright 2017';
    }
    else {
        echo "copyright 2017-{$year}";
    }
}

// function to shorten text to 10 words.
function shorttext($fulltext) {
    $fulltext = implode(' ', array_slice(explode(' ', $fulltext), 0, 10));
    return $fulltext;
}

?>
