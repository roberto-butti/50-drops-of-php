<?php

$template = "Hi %s, how are you?";
$name = "John";
echo sprintf($template, $name) . PHP_EOL;


$name = 'John';
$age = 25;
$string = sprintf('Hi %s, you are %d years old. Good bye my friend %1$s', $name, $age);
echo $string . PHP_EOL;

$name = 'John';
$age = 25;
echo sprintf('%10s: %s', "Name", $name) . PHP_EOL;
echo sprintf('%10s: %d', "Age", $age) . PHP_EOL;

// Padding with 25 chars, alignment right by default
echo sprintf('*%25s*', "Right with spaces") . PHP_EOL;
// Alignment left: use dash char before the number of chars
echo sprintf('*%-25s*', "Left with spaces") . PHP_EOL;
// Setting padding char (underscore) with single quote after % char
echo sprintf("*%'_25s*", "Right with underscores") . PHP_EOL;
// setting padding chat + alignment left
echo sprintf("*%'_-25s*", "Left with underscores") . PHP_EOL;
/**
*        Right with spaces*
*Left with spaces         *
*___Right with underscores*
*Left with underscores____*
 */
echo sprintf("*%2s*", "Something") . PHP_EOL;
/*
*Something*
*/
echo sprintf("*%2.2s*", "Something") . PHP_EOL;
/*
*So*
*/
// INTEGERS
echo sprintf("*%d*", 512) . PHP_EOL; // *512*
// align right with spaces
echo sprintf("*%8d*", 512) . PHP_EOL; // *     512*
// align right with 0s
echo sprintf("*%'08d*", 512) . PHP_EOL; // *00000512*
// if the padding values it is less than total amount of chars, it is ignored
echo sprintf("*%2d*", 512) . PHP_EOL; // *512*
// align left with spaces
echo sprintf("*%-8d*", 512) . PHP_EOL; // *512     *
// take sencond values with 2$
echo sprintf('*%2$d*', 512, 1024) . PHP_EOL; // *1024*

// FLOATS
// Floats with decimals (6 decimal digits by default)
echo sprintf('*%f*', 1.25) . PHP_EOL; // *1.250000*
// Floats with 3 decimals
echo sprintf("*%5.3f*", 1.25) . PHP_EOL; // *1.250*
// Floats rounded to 3 decimals
echo sprintf("*%5.3f*", 1.2519) . PHP_EOL; // *1.252*
// using padding directives:
// Floats rounded to 3 decimals prefixed with 0 for reaching 10 digits
echo sprintf("*%'010.3f*", 1.2519) . PHP_EOL; // *000001.252*
