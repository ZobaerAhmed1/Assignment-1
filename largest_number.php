<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

$largest_number = 0;

if ($num1 >= $num2 && $num1 >= $num3) {
    $largest_number = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest_number = $num2;
} else {
    $largest_number = $num3;
} 

printf("The largest number is: %d", $largest_number);