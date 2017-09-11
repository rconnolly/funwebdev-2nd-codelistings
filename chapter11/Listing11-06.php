<?php
$id = 23;
$firstName = "Pablo";
$lastName = "Picasso";
echo "<img src='23.jpg' alt='". $firstName . " ". $lastName . "' >";
echo "<img src='$id.jpg' alt='$firstName $lastName' >";
echo "<img src=\"$id.jpg\" alt=\"$firstName $lastName\" >";
echo '<img src="' . $id. '.jpg" alt="' . $firstName . ' ' .
$lastName . '" >';
echo '<a href="artist.php?id=' .$id .'">' .$firstName .' ' .
$lastName .'</a>';
?>