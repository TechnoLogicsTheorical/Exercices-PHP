<?php
    // A
    $number1 = 0;
    // B
    $number2 = 1;
    
    for($i = 0; $i < 20; $i++)
    {
        $total = $number1 + $number2;
        $number1 = $number2;
        $number2 = $total;
        echo("$total, ");
    }
?>