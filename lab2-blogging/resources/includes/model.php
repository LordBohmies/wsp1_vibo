<?php

// Normal Variables
// $emptyVar = '';

// Creating new arrays:
// Creates a blank array.
// $blankArray = array('A','B','C', 1, 2, 3);

//Creates an array with elements.
// $array = array("A", "B", "C");

//Creates an array with elements.
// $array = array("A", "B", "C");
// echo $array[0];  // will output A
// echo $array[1];  // will output B
// echo $array[3];  // will give an error

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }
//
// for ($i = 0; $i < count($array); $i++) {
//     echo $array[$i];
// }

// foreach ($array as $value) {
// 	echo $value;
// }


// Simple array for topics - Övning 4
// $model = array(
// 	'Första inlägget',
// 	'Snart är det vår',
// 	'Robin presenterar sig',
// 	'Senaste inlägget'
// );

//2D Associative array for full posts - Övning 9

$model = array(
	'forsta-inlagget' => array(
		'title' => 'Första inlägget',
		'author' => 'Gugge',
		'date' => '2015-01-01',
		'text' => 'Här kommer det första inlägget i sin helhet. Välkommen till Labb 3! Här övar vi på PHP för att bli duktiga webbserverprogrammerare.'
	),
	'snart-ar-det-var' => array(
		'title' => 'Snart är det vår',
		'author' => 'Gugge',
		'date' => '2017-02-24',
		'text' => 'Snart är det vår! Då övar vi på PHP för att bli duktiga webbserverprogrammerare. '
	),
	'robin-presenterar-sig' => array(
		'title' => 'Robin presenterar sig',
		'author' => 'Robin',
		'date' => '2015-02-25',
		'text' => 'Robin är en trevlig prick som gärna övar på PHP för att som du bli en duktig webbserverprogrammerare. '
	),
	'senaste-inlagget' => array(
		'title' => 'Senaste inlägget',
		'author' => 'Robin',
		'date' => '2015-02-26',
		'text' => 'Här kommer senaste inlägget i sin helhet. Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
	)
);

usort($model, function($a, $b) {
    return $b['date'] <=> $a['date'];
});

// echo '<pre>';
// print_r($model);
// echo '</pre>';
?>
