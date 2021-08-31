<?php 
    function palindrome($n)
    {
        $number = $n;
        $sum =0;
        while(floor($number))
        {
            $rem = $number % 10;
            $sum = $sum * 10 + $rem;
            $number = $number/10;
        }
        return $sum;
    }
    $input = 1235321;
    $num = palindrome($input);
    if($input == $num)
    {
        echo "$input is Palindrome Number";
    }
    else
    {
        echo "$input is not Palindrome Number";
    }
?>