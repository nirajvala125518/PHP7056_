<?php
// 1. Connect to MySQL server 
// Leaving the database name blank ("") ensures it works immediately on any local host setup.
$conn = mysqli_connect("localhost", "root", "");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. SQL Query using MySQL Date functions
$sql = "SELECT 
            DAYOFWEEK(NOW()) AS day_of_week, 
            WEEKDAY(NOW()) AS weekday_index, 
            DAYOFMONTH(NOW()) AS day_of_month, 
            DAYOFYEAR(NOW()) AS day_of_year, 
            DAYNAME(NOW()) AS day_name";

// Execute query
$result = mysqli_query($conn, $sql);

// 3. Fetch and display the results safely
if ($result && $row = mysqli_fetch_assoc($result)) {
    echo "<h3>MySQL Date Functions Results:</h3>";
    echo "1) DAYOFWEEK() (1=Sun, 7=Sat): " . $row['day_of_week'] . "<br>";
    echo "2) WEEKDAY() (0=Mon, 6=Sun): " . $row['weekday_index'] . "<br>";
    echo "3) DAYOFMONTH(): " . $row['day_of_month'] . "<br>";
    echo "4) DAYOFYEAR(): " . $row['day_of_year'] . "<br>";
    echo "5) DAYNAME(): " . $row['day_name'] . "<br>";
} else {
    echo "Query execution failed: " . mysqli_error($conn);
}

// 4. Close connection
mysqli_close($conn);
?>