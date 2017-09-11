<?php

$f = fopen("sample.txt", "r");
$ln = 0;
while ($line = fgets($f)) {
  $ln++;
  printf("%2d: ", $ln);
  echo $line . "<br>";
}
fclose($f);

?>