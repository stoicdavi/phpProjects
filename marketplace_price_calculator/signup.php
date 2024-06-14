<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = 0;
    $success = 0;


    // Check if username already exists
    $sql = "SELECT * FROM registration WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $user = 1; // Username already exists
        } else {
            // Hash the password before storing it
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO registration (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $success = 1; // Sign-up successful
            } else {
                die("Error: " . mysqli_error($conn));
            }
        }
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup</title>
</head>
<body>
<?php
if (isset($user) && $user == 1) {
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Error: User already exists!</h4>
    <p>Change your username and try again.</p>
    </div>';
}
if (isset($success) && $success == 1) {
    echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">You have successfully signed up!</h4>
    <p>Welcome to our community.</p>
    </div>';
}
?>
<h1 class="text-center">Sign Up Page</h1>
<div class="container mt-5">
    <form action="signup.php" method="post">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Enter your username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
    <a href="login.php" class="btn btn-success mt-3 w-100">Login</a>
</div>
</body>
</html>
