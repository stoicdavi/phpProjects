<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even/odd/prime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mx-50 text-success">
    <form action="circle.php" method="post" class="center">
        <h1 class="text-center">Checking for even or odd number</h1>
        <label for="number"></label>
        <input type="text" name="number" id="">
        <input type="submit" name="Area">
     </form>
     </div>
     <?php

function evenoorodd1($number1){
    if ($number1 % 2 == 0){
        echo "<h2>You have entered $number1 an even number</h2>";
    }
    else if($number1 % 2 != 0 && $number1 % 3 == 0){
        echo "<h2>You have entered $number1 an Odd number</h2>";
    }
    else{
        print("<h2>You have entered $number1 a Prime number</h2>");
    }
    echo '<script>alert("Hello welcome");<\script>';
}
evenoorodd1($_POST['number'])
?>
     

</body>
</html>
