<?php

// if statement with condition
if ( $hourOfDay > 6 && $hourOfDay < 12 ) {
    $greeting = "Good Morning";
}
else if ($hourOfDay == 12) { // optional else if
    $greeting = "Good Noon Time";
}
else { // optional else branch
    $greeting = "Good Afternoon or Evening";
}

//extra line to show output.
echo $greeting;
?>