<?php

 
require "header.php"; 
?>

 
<h2>Main Content Area</h2>
<p>This central content is coming directly from the main <b>index.php</b> file.</p>

<h3>Difference between Include and Require:</h3>
<ul>
    <li><b>Require:</b> If file is missing, it gives a Fatal Error and stops the program.</li>
    <li><b>Include:</b> If file is missing, it gives a Warning and keeps running the program.</li>
</ul>

<?php
 
include "footer.php"; 
?>
