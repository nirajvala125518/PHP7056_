<?php
session_start();

 if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
     header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

 $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '1234') {
        $_SESSION['user'] = $username;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $error = 'Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Session Login</title>
</head>
<body>

<?php if (isset($_SESSION['user'])): ?>
     <h2>Welcome, <?= htmlspecialchars($_SESSION['user']) ?>!</h2>
    <p>You are logged into the protected home page.</p>
    
     <a href="?action=logout">Logout</a>

<?php else: ?>
     <h2>Login Form</h2>
    
    <?php if ($error !== ''): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
<?php endif; ?>

</body>
</html>