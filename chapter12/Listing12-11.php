<?php

$previousPage = $_SERVER['HTTP_REFERER'];

// Check to see if referer was our search page
if (strpos($previousPage,"search.php") != 0) {
   echo "<a href='search.php'>Back to search</a>";
}
// Rest of HTML output

// a link to help test this.
?>

