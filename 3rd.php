<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>student login</h1>
    <form action="homepage.php" method="post">
    
    USERNAME: <input type="text" name="username" placeholder="enter your name">;<br>

    PASSWORD: <input type="password" name="password" placeholder="enter your password">;<br><br>

    <input type="submit" value="login" id =>
    
    
</body>
</html>



<?php


        if(isset($_POST['username']) && isset($_POST['password'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == "student" && $password == "12345"){
                echo "welcome student";
            }else{
                echo "invalid username or password";
            }
        }