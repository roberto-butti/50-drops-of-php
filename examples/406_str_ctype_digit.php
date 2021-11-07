<?php
$check = fn($string) => $string . " : " . (ctype_digit($string) ? "Digits" : "No digits");
// digits
echo $check("123456789") . PHP_EOL;
// no digits
echo $check("1234 A 567890") . PHP_EOL;
