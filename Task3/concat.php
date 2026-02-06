<?php
include 'db.php';

$sql = "SELECT CONCAT(name, ' - ', course) AS info FROM students";
$result = $conn->query($sql);

echo "<h3>Student Info</h3>";

while ($row = $result->fetch_assoc()) {
    echo $row['info'] . "<br>";
}
?>
