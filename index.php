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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="Style.css" >
    <title>Home</title>
</head>
<body>
    <nav class="bg-light content-flex wrap">
    <ul class="row mx-auto w-75">
            <li class="list-style-none w-50"><a href="index.php"  class="text-decoration-none">Home</a></li>
            <li class="list-style-none w-50"><a href="view.php" class="text-decoration-none">View Ratings</a></li>
        </ul>
    </nav>
        <section>
            <div class="container">
            <h2>Help Us Rate Your Political Representative</h2>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="feeback" class="form-label">Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rate" class="form-label">Rate</label>
                        <input type="number" class="form-control" id="rate" name="rate">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </section>
    
</body>
</html>