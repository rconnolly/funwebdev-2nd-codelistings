<?php

$filename="sample.txt";

// read the file into memory; if there is an error then stop processing
$paintings = file($filename) or die('ERROR: Cannot find file');

// our data is comma-delimited
$delimiter = ',';

// loop through each line of the file
foreach ($paintings as $painting) {
	// returns an array of strings where each element in the array
	// corresponds to each substring between the delimiters

	$paintingFields = explode($delimiter, $painting);
	$id= $paintingFields[0];
	$artist = $paintingFields[1];
	$title = $paintingFields[2];
	$year = $paintingFields[3];

	// do something with this data
	//Not in book listing - but here for demo.
	echo "Painting (#$id) $title by $artist in $year<br>";
}

?>