<?php


echo "<h2>--- BCA PHP Array Assignment ---</h2>";

 
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>1. Numeric Array (Days of the Week):</h3>";
echo "Day 1: " . $days[0] . "<br>";
echo "Day 2: " . $days[1] . "<br>";
echo "Day 3: " . $days[2] . "<br>";
echo "Day 4: " . $days[3] . "<br>";
echo "Day 5: " . $days[4] . "<br>";
echo "Day 6: " . $days[5] . "<br>";

 
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>2. Associative Array (Months and Days):</h3>";
echo "Days in January: " . $months["January"] . "<br>";
echo "Days in February: " . $months["February"] . "<br>";
echo "Days in December: " . $months["December"] . "<br>";


 
$laptops = array(
    "HP" => array(
        "Model" => "Pavilion",
        "Price" => 55000
    ),
    "Dell" => array(
        "Model" => "Inspiron",
        "Price" => 60000
    )
);

echo "<h3>3. Multidimensional Array (Laptop Details):</h3>";

echo "<b>First Company:</b> HP <br>";
echo "Model: " . $laptops["HP"]["Model"] . "<br>";
echo "Price: Rs. " . $laptops["HP"]["Price"] . "<br><br>";

echo "<b>Second Company:</b> Dell <br>";
echo "Model: " . $laptops["Dell"]["Model"] . "<br>";
echo "Price: Rs. " . $laptops["Dell"]["Price"] . "<br>";

?>
