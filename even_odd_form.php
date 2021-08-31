<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Program using Form</title>
</head>
<body>
    <form method="post">
        Enter a Number:
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php 
    if($_POST)
    {
        $number = $_POST['number'];
        if(($number%2)==0)
        {
            echo"$number is an Even number";
        }
        else{
            echo"$number is Odd number";
        }
    }
?>