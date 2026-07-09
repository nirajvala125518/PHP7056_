<?php

$num = "100";

echo "Original Value: " . $num . "<br>";
echo "Original Type: " . gettype($num) . "<br><br>";

settype($num, "integer");

echo "After Type Casting: " . $num . "<br>";
echo "New Type: " . gettype($num);

?>