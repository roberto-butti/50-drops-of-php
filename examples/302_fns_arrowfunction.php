<?php

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
