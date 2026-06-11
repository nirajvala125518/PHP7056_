<?php
echo "For Loop:<br>";
for($i = 5; $i <= 10; $i++)
{
    echo $i . " ";
}
echo "<br><br>Foreach Loop:<br>";
$arr = array(5,6,7,8,9,10);
foreach($arr as $n)
{
    echo $n . " ";
}
?>