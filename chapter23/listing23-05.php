<?php
header('Content-type: application/json');
$days = array("Sunday"=>metaphone("Sunday"),
              "Monday"=>metaphone("Monday"),
              "Tuesday"=>metaphone("Tuesday"),
              "Wednesday"=>metaphone("Wednesday"),
              "Thursday"=>metaphone("Thursday"),
	      "Friday"=>metaphone("Friday"),
	      "Saturday"=>metaphone("Saturday"));
if (array_key_exists($_GET['term'],array_keys($days))) {
  //this is a valid spelling, no suggestions needed.
} else {
  $closest = -1;
  $index="";
  //determine how typed word sounds
  $thisWord = metaphone($_GET['term']);
  //compare to each sound for each day
  foreach ($days as $day => $sound){
    //determine distance
    $distance = levenshtein($sound,$thisWord);
    //find closest one
    if(($distance<$closest)||$closest ==-1){
      $closest = $distance;
      $index = $day;
    }
  }
  $results = array ($index); //we are returning just one item echo json_encode($results);
}
