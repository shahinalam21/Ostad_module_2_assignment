<?php
// <!-- Write a PHP function that uses a for loop to print all even numbers from 1 to 20, -->

function Find_Even_Number_task1($n){
    for($i = 1; $i <= $n; $i++){
        if($i % 2 == 0){
            echo $i."\n";
        }
    }
}
Find_Even_Number_task1(20);


// In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.

function Find_Even_Number($first, $last){
    for($i = $first; $i <= $last; $i++){
        if($i % 2 == 0){
            echo $i." \n";
        }
    }
}
$first = 1;
$last = 20;

Find_Even_Number($first,$last);


// do the same using while loop and do-while loop also.

// While loop 
$i = 1;
while($i <= 20){
    if($i % 2 == 0){
        echo $i."\n";
    }
    $i++;
}

// do while loop
$i = 1;
do{
    if($i % 2 == 0){
        echo $i."\n";
    }
    $i++;
}while($i <= 20);