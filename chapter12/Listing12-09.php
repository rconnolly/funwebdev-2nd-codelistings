<?php
//Does not work as is, becuase we have yet to define "$link".
// This uses a database API . . . we will learn about it in Chapter 11

$pid = mysqli_real_escape_string($link, $_GET['id']);
if ( is_int($pid) ) {
   // Continue processing as normal
}
else {
   // Error detected. Possibly a malicious user
}

?>