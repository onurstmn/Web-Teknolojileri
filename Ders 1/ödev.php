<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
echo "<table border='1' width='200px'>";
echo "<tr>";
echo "<th>Sayı</th>";
echo "<th>Karesi</th>";
echo "<th>Küpü</th>";
echo "</tr>";
for ($i=1;$i<=10;$i++){
   echo "<tr>";
   echo "<td>$i</td>";
   echo "<td>",$i*$i,"</td>";
   echo "<td>",$i*$i*$i,"</td>";
   echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
 