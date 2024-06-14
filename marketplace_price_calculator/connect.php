<?php
$HOSTNAME = "your host";
$USERNAME = "root";
$PASSWORD = "yourpassword";
$DATABASE = "your database name";

$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>

