<?php

$servername="localhost:3307";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
// echo "Connected successfuly";

?>