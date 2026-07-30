<?php
$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = trim($_POST['username']);
    $e = trim($_POST['email']);
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);

     $data = "$u, $e, $p\n";

     if (file_put_contents("users.txt", $data, FILE_APPEND)) {
        $msg = "<p style='color:green;'>Registration successful! Saved to file.</p>";
    } else {
        $msg = "<p style='color:red;'>Error saving details!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form (No DB)</title>
</head>
<body>

    <h2>Register</h2>
    <?= $msg ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Register</button>
    </form>

</body>
</html>