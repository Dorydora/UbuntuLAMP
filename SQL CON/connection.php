<?php

//Create connection
$con=mysqli_connect("localhost","test");


//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}else{
    echo "connected to test";
}
?>