<?php
$firstName = "Pablo";
$lastName = "Picasso";
/*
Example one:
These two lines are equivalent. Notice that you can reference PHP
variables within a string literal defined with double quotes.
The resulting output for both lines is:
<em>Pablo Picasso</em>
*/
echo "<em>" . $firstName . " ". $lastName. "</em>";
echo "<em> $firstName $lastName </em>";
/*
Example two:
These two lines are also equivalent. Notice that you can use
either the single quote symbol or double quote symbol for string
literals.
*/
echo "<h1>";
echo '<h1>';
/*
Example three:
These two lines are also equivalent. In the second example, the
escape character (the backslash) is used to embed a double quote
within a string literal defined within double quotes.
*/
echo '<img src="23.jpg" >';
echo "<img src=\"23.jpg\" >";
?>