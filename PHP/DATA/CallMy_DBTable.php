<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$con=mysqli_connect("localhost","admin","Password1!","my_db");
// Check connection
if (mysqli_connect_errno()){
    echo"Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>