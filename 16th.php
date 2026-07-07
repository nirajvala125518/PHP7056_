<?php
// 1. Connect to MySQL server. 
// We leave the 4th argument (database name) blank because system functions like NOW() don't require a specific database.
$conn = mysqli_connect("localhost", "root", "");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. SQL Query using MySQL Time and Format functions
$sql = "SELECT 
            HOUR(NOW()) AS current_hour, 
            MINUTE(NOW()) AS current_minute, 
            SECOND(NOW()) AS current_second, 
            DATE_FORMAT(NOW(), '%W, %M %d, %Y') AS custom_format";

// Execute query
$result = mysqli_query($conn, $sql);

// 3. Fetch and display the results safely
if ($result && $row = mysqli_fetch_assoc($result)) {
    echo "<h3>MySQL Time & Format Functions Results:</h3>";
    echo "1) HOUR(): " . $row['current_hour'] . "<br>";
    echo "2) MINUTE(): " . $row['current_minute'] . "<br>";
    echo "3) SECOND(): " . $row['current_second'] . "<br>";
    echo "4) DATE_FORMAT(): " . $row['custom_format'] . "<br>";
} else {
    echo "Query execution failed: " . mysqli_error($conn);
}

// 4. Close connection
mysqli_close($conn);
?>