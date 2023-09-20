<?php
// Task 4: Fibonacci Series printing using a Function

// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.



function fibonacci($n){
    $fibonacci_num = array(0,1);

    for($i = 2; $i < $n; $i++){
        $fibonacci_num[$i] = $fibonacci_num[$i - 1] + $fibonacci_num[$i-2];

    }
    return $fibonacci_num;


}

function result_fibonacci($n){
    $fibonacci_num = fibonacci($n);

    for($i = 0; $i < $n; $i++){
        echo $fibonacci_num[$i];
        
        if($i < $n-1){
            echo ",";
        }
    }
}

result_fibonacci(15);