<?php

$inputString = "Hello World! Welcome to PHP.";

echo "<h3>Original String: '$inputString'</h3>";

echo "<b>1) strlen():</b> Length of string is: " . strlen($inputString) . "<br>";


echo "<b>2) strpos():</b> Position of 'Welcome' is: " . strpos($inputString, "Welcome") . "<br>";


echo "<b>3) str_word_count():</b> Word count is: " . str_word_count($inputString) . "<br>";

echo "<b>4) strrev():</b> Reversed string: " . strrev($inputString) . "<br>";

echo "<b>5) strtolower():</b> Lowercase: " . strtolower($inputString) . "<br>";

echo "<b>6) strtoupper():</b> Uppercase: " . strtoupper($inputString) . "<br>";
?>