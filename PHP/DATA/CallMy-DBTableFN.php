<?php
$con=mysqli_connect("localhost","admin","Password1!","my_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons
WHERE FirstName='Mike'");
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
while($row = mysqli_fetch_array($result)){
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br>";
}
?>