<?php

$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 52, "Thu" => 40, "Fri" => 37);

// foreach: iterating through the values
foreach ($forecast as $value) {
	echo $value . "<br>";
}

// foreach: iterating through the values AND the keys
foreach ($forecast as $key => $value) {
	echo "day" . $key . "=" . $value;
}

?>
