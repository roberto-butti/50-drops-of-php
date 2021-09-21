<?php

// Define anonymous function, and assign it to the $sum variable
$sum = function ($x, $y) {
    return $x + $y;
};

// Call the anonymous function via variable $sum
echo $sum(5, 3) . PHP_EOL;
echo $sum(1, 2) . PHP_EOL;



$a = [1, 2, 3, 4, 5];
$b = array_map(
    function ($x) {
        return $x * 2;
    },
    $a
);
print_r($b); // [2,4,6,8,10]

$a = array_map(
    function ($item) {
        return $item * 2;
    },
    [ 1,2,3,4,5 ]
);
print_r($a); // [2,4,6,8,10]
