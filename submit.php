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
        echo "Invalid email format";
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
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
?>