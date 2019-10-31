<?php
$con=mysqli_connect("localhost","admin","Password1!","my_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM Persons WHERE LastName='Eastland'");
mysqli_close($con);
?>