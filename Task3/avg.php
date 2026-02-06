<?php
include 'db.php';

$sql = "SELECT AVG(grade) AS average FROM students";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Average Grade</h3>";
echo round($row['average'], 2);
?>
