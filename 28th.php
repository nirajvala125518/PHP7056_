<?php
 session_start();

 
$_SESSION["username"] = "Niraj";
$_SESSION["role"] = "Admin";

echo "Session variables are set!<br>";
echo "User: " . $_SESSION["username"];
?>