<?php
if (isset($_COOKIE["user"])) {
    echo "Welcome back  " . htmlspecialchars($_COOKIE["user"]) . "!";
} else {
    echo "Cookie named 'user' is not set!";
}
?>