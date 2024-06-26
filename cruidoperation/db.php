<?php
$servername = 'your severname i.e localhost';
$username = 'your username i.e root';
$password = 'Your password';
$dbname = 'Your database name';
$conn = new mysqli($servername, $username, $password, $dbname);
//test connection
if ($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}
?>