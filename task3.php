<?php
// Task3
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

function fibonacci($n){
    if($n == 0 || $n == 1){
        return $n;
    }else{
        return fibonacci($n-1) + fibonacci($n-2);
    }
}
$count = 0;
for($i = 0; $i < 100; $i++){
    $fibnumber = fibonacci($i);

    if($fibnumber > 100){
        break;
    }
    echo " $fibnumber ,";
    $count++;
}

echo "\n total fibo number = $i";