<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$con=mysqli_connect("localhost","admin","Password1!","my_db");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result)){
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br>";
}

mysqli_close($con);
?>