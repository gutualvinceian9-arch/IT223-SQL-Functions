<?php
include 'db.php';

$sql = "SELECT UPPER(name) AS upper_name FROM students";
$result = $conn->query($sql);

echo "<h3>Names in Uppercase</h3>";

while ($row = $result->fetch_assoc()) {
    echo $row['upper_name'] . "<br>";
}
?>
