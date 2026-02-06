<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demo</title>
    <style>
        body { font-family: Arial; }
        table { border-collapse: collapse; width: 90%; }
        th, td { border: 1px solid black; padding: 8px; }
    </style>
</head>
<body>

<h2>IT223 - SQL Functions</h2>

<table>
<tr>
    <th>SQL Function</th>
    <th>Description</th>
    <th>Example Code</th>
    <th>Example Output</th>
</tr>

<tr>
    <td>COUNT()</td>
    <td>Counts total rows</td>
    <td>SELECT COUNT(*) FROM students</td>
    <td><a href="count.php">View Output</a></td>
</tr>

<tr>
    <td>SUM()</td>
    <td>Adds all values</td>
    <td>SELECT SUM(grade) FROM students</td>
    <td><a href="sum.php">View Output</a></td>
</tr>

<tr>
    <td>AVG()</td>
    <td>Finds average value</td>
    <td>SELECT AVG(grade) FROM students</td>
    <td><a href="avg.php">View Output</a></td>
</tr>

<tr>
    <td>UPPER()</td>
    <td>Converts to uppercase</td>
    <td>SELECT UPPER(name) FROM students</td>
    <td><a href="upper.php">View Output</a></td>
</tr>

<tr>
    <td>CONCAT()</td>
    <td>Joins strings</td>
    <td>SELECT CONCAT(name, course) FROM students</td>
    <td><a href="concat.php">View Output</a></td>
</tr>

</table>

</body>
</html>
