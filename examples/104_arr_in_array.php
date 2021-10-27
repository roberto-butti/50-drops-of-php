<?php

$array = ["a", "b", "c"];
$elementToFind= "b";

$inArray = in_array( $elementToFind, $array);

var_dump($inArray);

$array = ["1", "b", "c"];
$elementToFind= 1;
$inArray = in_array( $elementToFind, $array);
var_dump($inArray);
$inArray = in_array( $elementToFind, $array, true);
var_dump($inArray);
