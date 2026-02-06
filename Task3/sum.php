<?php
include 'db.php';

$sql = "SELECT SUM(grade) AS total_grade FROM students";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Total of All Grades</h3>";
echo $row['total_grade'];
?>
