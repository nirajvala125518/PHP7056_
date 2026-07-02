<?php

// Associative array
$arr1 = array("Name"=>"Dishank", "City"=>"Rajkot");

echo "<h3>1. array_change_key_case()</h3>";
print_r(array_change_key_case($arr1, CASE_LOWER));
echo "<br>";
print_r(array_change_key_case($arr1, CASE_UPPER));


// Months array
$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug");

echo "<h3>2. array_chunk()</h3>";
print_r(array_chunk($months, 3));


// Count values array
$arr2 = array("Apple","Banana","Apple","Mango","Banana","Apple");

echo "<h3>3. array_count_values()</h3>";
print_r(array_count_values($arr2));


// array_pop()
$arr3 = array("Red","Green","Blue");

echo "<h3>4. array_pop()</h3>";
array_pop($arr3);
print_r($arr3);


// array_push()
$arr4 = array("Red","Green");

echo "<h3>5. array_push()</h3>";
array_push($arr4, "Blue", "Yellow");
print_r($arr4);


// array_unshift()
$arr5 = array("Green","Blue");

echo "<h3>6. array_unshift()</h3>";
array_unshift($arr5, "Red");
print_r($arr5);


// array_shift()
$arr6 = array("Red","Green","Blue");

echo "<h3>7. array_shift()</h3>";
array_shift($arr6);
print_r($arr6);

?>