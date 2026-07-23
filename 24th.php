<?php
include '22th.php';

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    
    echo "
    <style>
        .custom-table {
            margin: 50px auto; 
            border-collapse: collapse;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 80%;        
            max-width: 800px;
        }
        .custom-table th {
            color: #333333;            
            text-align: left;
            font-weight: 600;          
            padding: 14px 12px;
            border-bottom: 2px solid #e0e0e0; 
            font-size: 15px;
        }
        .custom-table td {
            padding: 12px;
            border-bottom: 1px solid #eeeeee; 
            color: #555555;            
            font-size: 14px;
        }
        
        .custom-table tbody tr:hover {
            background-color: #f9f9f9; 
        }
    </style>
    ";

    
    echo "<table class='custom-table'>";
    echo "<thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
          </thead>";
    
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['password']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";

    echo "</table>";
} else {
    echo "No records found.";
}
?>
