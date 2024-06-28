<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "Your password";
$DBNAME = "political";
$connection = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);
if ($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}