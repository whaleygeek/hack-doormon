<html><body>
<table border=1>
<?php
f = fopen("door.txt", "r");
while ((line = fread(f)) !== False)
{
  t,s = explode(line, ",");
?><tr>
<td><?=t ?></td>
<td><?=s ?></td>
</tr>
<?
}

fclose(f);

if (s == "BOOT:OPEN" || s == "CHANGE:OPENED")
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


