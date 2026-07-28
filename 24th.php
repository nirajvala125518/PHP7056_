<?php
if (isset($_POST['username'])) {
    setcookie("user", $_POST['username'], time() + 3600);
    echo "Cookie set for: " . htmlspecialchars($_POST['username']);
}
?>

<form method="post">
    Enter Name: <input type="text" name="username" required>
    <button type="submit">Set Cookie</button>
</form>