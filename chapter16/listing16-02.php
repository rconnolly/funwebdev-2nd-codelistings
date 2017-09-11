<?php
   if( !isset($_COOKIE['Username']) ) {
      //no valid cookie found
}
else {
      echo "The username retrieved from the cookie is:";
      echo $_COOKIE['Username'];
   }
?>
