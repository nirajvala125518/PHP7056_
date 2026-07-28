<?php
 
header("Set-Cookie: user=Niraj; expires=" . gmdate('D, d M Y H:i:s \G\M\T', time() + 3600) . "; path=/");

echo "Cookie set using HTTP header!";
?>