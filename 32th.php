<?php
session_start();

 if (isset($_GET['logout'])) { session_destroy(); header("Location: index.php"); exit(); }

 $u = $_COOKIE['u'] ?? ''; 
$p = $_COOKIE['p'] ?? '';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] === 'admin' && $_POST['password'] === '1234') {
        $_SESSION['user'] = $_POST['username'];
        
         $exp = isset($_POST['remember']) ? time() + (86400 * 30) : time() - 3600;
        setcookie('u', $_POST['username'], $exp, "/");
        setcookie('p', $_POST['password'], $exp, "/");
        
        header("Location: index.php"); exit();
    } else { $error = "Invalid credentials!"; }
}
?>

<!DOCTYPE html>
<html>
<body>

<?php if (isset($_SESSION['user'])): ?>
    <h2>Welcome, <?= $_SESSION['user'] ?>!</h2>
    <a href="index.php?logout=1">Logout</a>
<?php else: ?>
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" value="<?= $u ?>" placeholder="Username" required><br><br>
        <input type="password" name="password" value="<?= $p ?>" placeholder="Password" required><br><br>
        <label><input type="checkbox" name="remember" <?= $u ? 'checked' : '' ?>> Remember Me</label><br><br>
        <button type="submit">Login</button>
    </form>
<?php endif; ?>

</body>
</html>