<?php

/**
* This function returns a nicely formatted string using the current
* system time. The showSeconds parameter controls whether or not
* to show the seconds.
*/
function getNiceTime($showSeconds=true) {
    if ($showSeconds==true)
        return date("H:i:s");
    else
        return date("H:i");
}

echo getNiceTime();

?>