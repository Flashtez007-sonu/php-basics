<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Using forms</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if($_POST)
    {
        $fact =1;
        $number = $_POST['number'];
        echo "Factorial of $number: <br> <br>";
        for($i = 1;$i<=$number; $i++)
        {
            $fact = $fact * $i;
        }
        echo $fact."<br>";
    }
    ?>
    
</body>
</html>