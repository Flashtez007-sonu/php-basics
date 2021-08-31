<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number Using Form</title>
</head>
<body>
    <form method="post">
        Enter the Number:
        <input type="text" name="num"><br>
        <button type="submit">Check</button>
    </form>
    <?php
        if($_POST)
        {
            $num = $_POST['num'];
            $reverse = strrev($num);
            if($num == $reverse)
            {
                echo "The number $num is Palindrome Number";
            }
            else
            {
                echo "The number $num is not an Palindrome Number";
            }
        }
    ?>
</body>
</html>