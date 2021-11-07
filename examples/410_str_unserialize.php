<?php

$array = [
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
];
$storage = serialize($array);
var_dump($storage);
$new_array = unserialize($storage);
print_r($new_array);

$storage = 'a:4:{i:0;a:2:{s:7:"product";s:4:"Desk";s:5:"price";i:200;}i:1;a:2:{s:7:"product";s:5:"Chair";s:5:"price";i:100;}i:2;a:2:{s:7:"product";s:8:"Bookcase";s:5:"price";i:150;}i:3;a:2:{s:7:"product";s:4:"Door";s:5:"price";i:100;}}';
$new_array = unserialize($storage);
print_r($new_array);
