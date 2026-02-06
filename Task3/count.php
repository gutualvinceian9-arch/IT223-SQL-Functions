<?php
include 'db.php';

$sql = "SELECT COUNT(*) AS total FROM students";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h3>Total Students</h3>";
echo $row['total'];
?>
