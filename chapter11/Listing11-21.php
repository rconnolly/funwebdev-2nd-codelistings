<?php

$count= 56;
function testScope() {
	 global $count;
	 echo $count; // outputs 56
}

testScope();
echo $count; // outputs 56

?>