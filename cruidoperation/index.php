<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <h2>List of clients</h2>
        <a href="/functions/cruidoperation/add.php" class="btn btn-success">Add A customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>created At</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $clients = $conn->query('SELECT * FROM clients');
                    while($client = $clients->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $client['id'] ?></td>
                    <td><?php echo $client['name'] ?></td>
                    <td><?php echo $client['email'] ?></td>
                    <td><?php echo $client['phone'] ?></td>
                    <td><?php echo $client['address'] ?></td>
                    <td><?php echo $client['Created_at'] ?></td>
                    <td>
                        <a href="/functions/cruidoperation/edit.php?id=<?php echo $client['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="/functions/cruidoperation/delete.php?id=<?php echo $client['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>