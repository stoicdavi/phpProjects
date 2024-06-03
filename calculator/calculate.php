<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
<?php
echo "<h2>Result:</h2>";
    $num1 = &$_POST['num1'];
    $num2 = &$_POST['num2'];
    $operator = &$_POST["operator"];
    $result = 0;
    
    if($operator == "add"){
        $result = $num1 + $num2;
        echo "The result of $num1 + $num2 is $result";
    }
    else if($operator == "sub"){
        $result = $num1 - $num2;
        echo "The result of $num1 - $num2 is $result";
    }
    else if($operator == "mul"){
        $result = $num1 * $num2;
        echo "The result of $num1 * $num2 is $result";
    }
    else if($operator == "div"){
        $result = $num1 / $num2;
        echo "The result of $num1 / $num2 is $result";
    }
    else if($operator == "mod"){
        $result = $num1 % $num2;
        echo "The result of $num1 % $num2 is $result";
    }
    else if($operator == "exp"){
        $result = $num1 ** $num2;
        echo "The result of $num1 ** $num2 is $result";
    }
    else if($operator == "sqrt"){
        $result = sqrt($num1);
        echo "The square root of $num1 is $result";
    }
    else if($operator == "log"){
        $result = log($num1);
        echo "The logarithm of $num1 is $result";
    }
    else{
        echo "Invalid operator";
    }
    
?>
<br>
<button><a href="index.php">Perform a different calculation</a></button>
</body>
</html>
