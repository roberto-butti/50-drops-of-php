<?php

// basic sequence, from 1 to  5
$a = range(1, 5);
print_r($a);

// descending with numbers, from 5 to 1
$a = range(5, 1);
print_r($a);

// with chars
$a = range('a', 'e');
print_r($a);

// descending, from 'e' to 'a'
$a = range('e', 'a');
print_r($a);

// upper and lower case
$s = implode(array_merge(range('A', 'Z'), range('a', 'z')));
echo $s . PHP_EOL;

// Float
$a = range(1.5, 4.45);
print_r($a);

// Step, odd numbers
$a = range(1, 10, 2);
print_r($a);

// Step, negative
$a = range(10, 1, -2);
print_r($a);
