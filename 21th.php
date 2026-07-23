<?php

    $number = 10;
    $digit = 7;

    echo gettype($digit)."<br>";
    settype($number,"string");

    echo gettype($number);

?>