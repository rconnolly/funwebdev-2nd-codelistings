<?php
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser($_SERVER['HTTP_USER_AGENT'], true);
print_r($browser);
?>