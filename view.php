<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ratings</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="view.php">View Ratings</a></li>
     </ul>
   </nav> 
   <section>
     <div class="container">
          <h1>Rate Your Politician</h1>
          <table class="table table-striped table-bordered">
          <thead>
               <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Feedback</th>
                    <th>Rating</th>
                    <th>Submission Date</th>
               </tr>
          </thead>
          <tbody>
               <?php
               if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                    $sql = "SELECT * FROM feedback";
                    $result = $connection->query($sql);
                    if ($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
               $id = $row['id'];
               $name =  $row['name'];
               $email =  $row['email'];
               $feedback = $row['feedback'];
               $rate = $row['rating'] . "<br>";
               $dateset =  $row['submission_date'] ;

               ?>
               <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $feedback; ?></td>
                    <td><?php echo $rate; ?></td>
                    <td><?php echo $dateset; ?></td>
                    <td>
                    <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                    </td>
               </tr>
               <?php }
               } 
          }?>
          </tbody>
          </table>
     </div>
   </section>

</body>
</html>