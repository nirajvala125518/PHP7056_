<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        <form method = "POST" enctype = "multipart/form-data">

        <h1>Sign Up</h1> <br>
        <h3>Username: </h3>
        <input type="text" name = "username" required/> <br>

        <h3>Email: </h3>
        <input type="email" name="email" required/> <br>

        <h3>Password: </h3>
        <input type="password" name = "password" required/> <br>

        <h3>Confirm Password: </h3>
        <input type="password" name="c_password" required/> <br>
        
        <h3>Phone number: </h3>
        <input type="text" name = "phone_number" required/> <br>

        <h3>Profile: </h3>
        <input type="file" name = "image" required/> <br>

        <input type="submit" name = "submit" value = "register" />

        <?php 
            if (isset($msg)) 
            {
                 echo "<p style='color: green; font-weight: bold;'>$msg</p>"; 
            }
?>

        </form>

    </center>

<?php

    include '22th.php';

    if(isset($_POST['submit']))

    {
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $con_pass = $_POST['c_password'];
        $phn = $_POST['phone_number'];
        $prof = $_FILES['image']['name'];


        if($pass == $con_pass)
        {
            $sql = "INSERT INTO `users`(`username`, `email`, `phone`, `password`, `profile_pic`) VALUES ('$user', '$email', '$phn', '$pass', '$prof')";

            if(mysqli_query($conn, $sql))
            {
                $msg = "Registration Successful.";
            }
            else{
                echo "Error: " . mysqli_error($conn);
            }
        }
        else{
            $msg = "Error: Passwords do not match!";
        }
        

        
        

    
    }
    


?>
</body>
</html>