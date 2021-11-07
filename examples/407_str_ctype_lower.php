<?php
$check = fn($string) => $string . " : " . (ctype_lower($string) ? "Lower casse" : "No lower case");
// lower case
echo $check("abcdefg") . PHP_EOL;
// no lower case
echo $check("abCDEFG") . PHP_EOL;
