<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Using Forms</title>
</head>

<body>
    <form method="post">
        Enter The Number:
        <input type="text" name="input"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if ($_POST) {
        $input = $_POST['input'];
        for ($i = 2; $i <= $input - 1; $i++) {
            if ($input % $i == 0) {
                $value = True;
            }
        }
        if (isset($value) && $value) {
            echo 'The number' . $input . 'is not Prime';
        } else {
            echo 'The Number' . $input . 'is prime';
        }
    }
    ?>
</body>

</html>