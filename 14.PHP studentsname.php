<?php
$arr=["Honda","Bajaj","Yamaha","Hero"];
$t=$arr;

echo "NAME SORTING";

echo "<br> <br>";
echo "display using print_r() <br>";
print_r($t);
echo "<br> <br>";
echo "sorting using asort() <br>";
asort($t);
print_r($t);
echo "<br> <br>";
echo "sorting using arsort() <br>";
arsort($t);
print_r($t);
?>
