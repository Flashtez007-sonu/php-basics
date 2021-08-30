//To find sum of digits of a number just add all the digits.

Logic:

Take the number.
Divide the number by 10.
Add the remainder to a variable.
Repeat the process until remainder is 0.

<?php 
    $num = 145239;
    $sum = 0; $rem = 0;
    for($i=0; $i<=strlen($num);$i++)
    {
        $rem = $num%10;
        $sum= $sum + $rem;
        $num = $num/10;
    }
    echo "sum of digits 145239 is $sum";

?>

OUTPUT:
sum of digits 145239 is 24
