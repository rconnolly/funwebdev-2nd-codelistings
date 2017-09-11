<?php

//From outside the listing.
$days = array();
$days[0] = "Mon";
$days[1] = "Tue";
$days[2] = "Wed";

// while loop
$i=0;
while ($i < count($days)) {
      echo $days[$i] . "<br>";
      $i++;
}

// do While loop
$i=0;
do {
   echo $days[$i] . "<br>";
   $i++;
} while ($i < count($days));

// for loop
for ($i=0; $i<count($days); $i++) {
    echo $days[$i] . "<br>";
}

?>