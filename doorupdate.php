<?php
$t = $_GET['time'];
$s = $_GET['status'];

$f = fopen("door.txt", "a+");
fwrite($f, "$t,$s\n");
fclose($f);
?>UPDATED OK


