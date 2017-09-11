<?php

function getNiceTime(bool $showSeconds=1) {
    if ($showSeconds==true)
        return date("H:i:s");
    else
        return date("H:i");
}

?>