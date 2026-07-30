<?php
 $cookie_name = "visitor_status";

 if (isset($_COOKIE[$cookie_name])) {
    $status = "Welcome back! You are a returning user.";
} else {
    $status = "Welcome! You are a new user.";
     setcookie($cookie_name, "visited", time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Tracker</title>
</head>
<body>

    <h2><?= $status ?></h2>

</body>
</html>