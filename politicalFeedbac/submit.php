<?php
include 'db.php';
$name = $email = $feedback = $rate = "";


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $rate = $_POST['rate'];
    //validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<cript> alert('Invalid email format')</script>";
    }
    //Check if the email already exists
    $sql = "SELECT * FROM feedback WHERE email = '$email'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0){
        echo "Email already exists";
    }
    //Insert the data into the database
    $sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rate')";
    if ($connection->query($sql) === TRUE){
        echo "<script> alert('Feedback submitted successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    // header('Location: /bscit/political/politicalFeedbac/index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit Feedback</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<bod>
    <nav class="navba">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <ul class="row mx-auto w-75">
          <li class="list-style-none w-50"><a href="index.html"  class="text-decoration-none">Home</a></li>
          <li class="list-style-none w-50"><a href="view.php" class="text-decoration-none">View Ratings</a></li>
     </ul>
   </nav> 
    </nav>
</bod>