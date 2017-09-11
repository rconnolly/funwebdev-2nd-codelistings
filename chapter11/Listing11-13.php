<?php

/**
* This function returns a nicely formatted string using the current
* system time.
*/
function getNiceTime() {
    return date("H:i:s");
}


//for demo call the function
echo getNiceTime();
?>