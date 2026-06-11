<?php
echo("<center>");

$num1 = 25;
$num2 = 10;
$num3 = 40;

$maximum = max($num1, $num2, $num3);
$minimum = min($num1, $num2, $num3);

echo "<center>";
echo "<h2>Maximum and Minimum Number</h2>";

echo "Number 1 : $num1 <br>";
echo "Number 2 : $num2 <br>";
echo "Number 3 : $num3 <br><br>";

echo "Maximum Number : $maximum <br>";
echo "Minimum Number : $minimum";

echo "</center>";

?>