<html><body>
<table border=1>
<?php
$f = fopen("door.txt", "r");
while (($line = fgets($f)) !== False)
{
  $line = trim($line);
  if ($line != "")
  {
    //print($line);
    $parts = explode(",", $line);
    //print_r($parts);
    $t = trim($parts[0]);
    $s = trim($parts[1]);
    if ($s != "")
    {
?><tr>
<td><?=$t ?></td>
<td><?=$s ?></td>
</tr>
<?
    }
  }
}

fclose($f);
?></table><?
if ($s == "STATE:OPEN" || $s == "CHANGE:OPENED")
{
  print("<B>The door is OPEN</B>");
}
else
{
  print("<B>The door is CLOSED</B>");
}
?>
</body>
</html>


