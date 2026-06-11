<?php
echo "<hr width='60%'>";
define("UNIVERSITY_NAME","MARWADI UNIVERSITY");

$studentName = "Vala Niraj";
$enrollmentNo = "MU12345";
$semester = "Semester 5";
$totalMarks = 600;
$obtainedMarks = 510;
$percentage = ($obtainedMarks / $totalMarks) * 100;

echo "<center>";

echo "<h2 style='color:darkblue;'>".UNIVERSITY_NAME."</h2>";
echo "<hr width='60%'>";

echo "<h1 style='color:brown;'>Previous Semester Result</h1>";

echo "<b>Student Name :</b> $studentName <br>";
echo "<b>Enrollment No :</b> $enrollmentNo <br>";

echo "<hr width='60%'>";

echo "<b>Semester :</b> $semester <br>";
echo "<b>Total Marks :</b> $totalMarks <br>";

echo "<hr width='60%'>";

echo "<b>Obtained Marks :</b> $obtainedMarks <br>";
echo "<b>Percentage :</b> <font color='green'>$percentage%</font>";

echo "</center>";

?>