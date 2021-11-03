<?php

// classical function
function sum($x, $y)
{
    return $x + $y;
}
echo "Calling sum(5, 3) function: " . sum(5, 3)  . PHP_EOL;
echo "Calling sum(1, 2) function: " . sum(1, 2)  . PHP_EOL;


// Define anonymous function, and assign it to the $sum variable
$sum = function ($x, $y) {
    return $x + $y;
};

// Call the anonymous function via variable $sum
echo "Calling anonymous function: " . $sum(5, 3) . PHP_EOL;
echo "Calling anonymous function: " . $sum(1, 2) . PHP_EOL;

$sum = function ($x, $y) {
    return $x + $y;
};
$mul = function ($x, $y) {
    return $x * $y;
};
function apply($func)
{
    $a = rand(1, 10);
    echo $a . "-";
    $b = rand(1, 10);
    echo $b . "-";
    return $func($a, $b);
}
echo "APPLY sum : " . apply($sum) . PHP_EOL;
echo "APPLY mul : " . apply($mul) . PHP_EOL;


// an example with array_map
$a = [1, 2, 3, 4, 5];
$double = function ($x) {
    return $x * 2;
};
$b = array_map(
    $double,
    $a
);
print_r($b); // [2,4,6,8,10]

// in a more concise way...
$a = array_map(
    function ($item) {
        return $item * 2;
    },
    [ 1,2,3,4,5 ]
);
print_r($a); // [2,4,6,8,10]
