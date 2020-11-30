<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Table</title>
    <style>
    table{margin:auto;
    width:30%;}

    </style>
  </head>

  <body>


<?php
echo "<table border=2><tr>";
echo "<tr><td>Even</td>
<td>Odd</td>
<td>*5</td>
<td>*10</td></tr>";
echo "<td>";

for ($x = 1; $x <=100; $x++) {
    if ($x % 2 == 0) {
        echo "$x<br>"."<br>";

    }
}
echo "<td>";
for ($x = 1; $x <=100; $x++) {

    if ($x % 2 == 1) {
        echo "$x<br>"."<br>";
    }
}
echo "<td valign= top>";
for ($x = 1; $x <=100; $x++) {
    if ($x%5==0) {
    echo "$x<br>"."<br>";
 }
}

echo "<td valign= top>";
for ($x = 1; $x <=100; $x++) {
    if ($x%10==0) {
    echo "$x<br>"."<br>";
 }
}
echo "</table>";



 ?>

   </body>
 </html>
