<?php

// Define a classical function
function sum_classic($x, $y)
{
    return $x + $y;
}
// define an anonymous function
$sum_anonymous = function ($x, $y) {
    return $x + $y;
};
// define arrow function
$sum_arrow = fn($x, $y) => $x + y;

echo "Sum classic   : " . sum_classic(5, 2) . PHP_EOL;
echo "Sum anonymous : " . $sum_anonymous(5, 2) . PHP_EOL;
echo "Sum arrow     : " . $sum_anonymous(5, 2) . PHP_EOL;

// example for showing the scope of variables
$a = 4;
$b = 5;
$sumx = fn() => $a + $b;
echo $sumx() . PHP_EOL;


// a little bit more complex example
$collection = [
    ['product' => 'Desk', 'price' => 200, 'active' => true],
    ['product' => 'Chair', 'price' => 100, 'active' => true],
    ['product' => 'Door', 'price' => 300, 'active' => false],
    ['product' => 'Bookcase', 'price' => 150, 'active' => true],
    ['product' => 'Door', 'price' => 100, 'active' => true],
];

$columns = ["product", "price"];
$filteredArray = array_map(fn($item) => array_intersect_key($item, array_flip($columns)), $collection);
print_r($filteredArray);
