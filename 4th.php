<?php

define("UNIVERSITY_NAME", "MARWADI UNIVERSITY");
define("REPORT_TITLE", "STUDENT RESULT");

$rollNo = "7071";
$name = "Parth Nadiyapara";
$semester = "2nd Semester";

$phpMarks = 88;
$dbMarks = 92;
$dsMarks = 85;

$totalObtained = $phpMarks + $dbMarks + $dsMarks;
$totalPossible = 300;
$percentage = ($totalObtained / $totalPossible) * 100;
$status = "PASSED";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <style>
       
        body {
            font-family: 'Times New Roman', serif;
            margin-top: 50px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <center>
        
        <hr style="border: 2px double #000; width: 450px;">
        <b><?php echo UNIVERSITY_NAME; ?></b><br>
        <b><?php echo REPORT_TITLE; ?></b>
        <hr style="border: 2px double #000; width: 450px;">

        <p>
            Roll No: <?php echo $rollNo; ?><br>
            Name: <?php echo $name; ?><br>
            Semester: <?php echo $semester; ?>
        </p>
       
        <hr style="border-top: 1px dashed #000; width: 450px;">

        <p>
            PHP Programming: <?php echo $phpMarks; ?> / 100<br>
            Database Systems: <?php echo $dbMarks; ?> / 100<br>
            Data Structures: <?php echo $dsMarks; ?> / 100
        </p>

        
        <hr style="border-top: 1px dashed #000; width: 450px;">

        
        <p>
            Total Marks: <?php echo $totalObtained; ?> / <?php echo $totalPossible; ?><br>
            Percentage: <?php echo round($percentage, 2); ?>%<br>
            Result Status: <?php echo $status; ?>
        </p>

        <hr style="border: 2px double #000; width: 450px;">

    </center>

</body>
</html>
