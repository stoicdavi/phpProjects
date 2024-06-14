<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'connect.php';
  $username= $_POST['username'];
  $password = $_POST['password'];
  $login = 0;
  $invalid = 0;

  $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if($result){
    $num = mysqli_num_rows($result);
    if($num > 0){
      echo "Login Successful";
      $login = 1;
      session_start();
      $_SESSION["username"] = $username;
      header('location:marketplace.php');
  }
  else{
    // echo "Invalid username or password";
    $invalid = 1;
  }
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

    <title>Login</title>
  </head>
  <body>
    <?php
  if (isset($login) && $login == 1) {
    echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Succesfully loged in</h4>
    </div>';
}
if (isset($invalid) && $invalid == 1) {
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Invalid username or password</h4>
    <p>Check your password and username and try again!</p>
    </div>';
}
?>

    <h1 class="text-center">Login to the marketplace</h1>
    <div class="container mt-5">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="username">
 </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
    </div>
   
  </body>
</html>