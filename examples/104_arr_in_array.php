<?php

$array = ["a", "b", "c"];
$elementToFind = "b";

$inArray = in_array($elementToFind, $array);

var_dump($inArray);

// with strict
$array = ["1", "b", "c"];
$elementToFind = 1;
$inArray = in_array($elementToFind, $array);
var_dump($inArray);
$inArray = in_array($elementToFind, $array, true);
var_dump($inArray);

// side effect of no strict


$array = array(
    true,
    false,
    0,
    999,
    null,
    "something"
);

in_array(111, $array); // true ??? :)
in_array(false, $array); // true
in_array(1, $array); // true ??? :)
in_array('another string', $array); // true , because the true
printf("empty array is in array: %b" . PHP_EOL, in_array(array(), $array)); // true, because the false


$array = array ("My Test", "second" , "third");
in_array("my tesT", $array); // false because in_array is case sensitive
in_array(strtolower("my tesT"), array_map('strtolower', $array)); // true
