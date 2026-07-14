<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>

<style>
body{text-align:center; font-family:Arial;}
input{width:200px; padding:5px; margin:5px;}
</style>

</head>
<body>

<h2>Sign Up Form</h2>

<form method="post" enctype="multipart/form-data">

Username<br>
<input type="text" name="username" required><br>

Email<br>
<input type="email" name="email" required><br>

Phone<br>
<input type="text" name="phone" required><br>

Password<br>
<input type="password" name="password" required><br>

Confirm Password<br>
<input type="password" name="confirm" required><br>

Profile Image<br>
<input type="file" name="image" required><br><br>

<input type="submit" name="submit" value="Sign Up" required>

</form>

<?php

if(isset($_POST['submit']))
{
    if($_POST['password'] == $_POST['confirm'])
    {
        move_uploaded_file($_FILES['image']['tmp_name'],
        "uploads/".$_FILES['image']['name']);

        echo "<h3 style='color:green;'>You have signed up successfully.</h3>";
    }
    else
    {
        echo "<h3 style='color:red;'>'Oops! The passwords you entered do not match. Please try again.'</h3>";
    }
}

?>
<?php
 
if(isset($_SESSION['flash_message']))
{
    echo $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);  
}
?>