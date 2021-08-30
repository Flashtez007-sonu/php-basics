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