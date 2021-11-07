<?php

$check = fn($string) => $string . " : " . (ctype_alpha($string) ? "Alpha characters" : "No alpha");
// alpha chars
echo $check("myteststring") . PHP_EOL;
// no alpha chars because the space
echo $check("my test string") . PHP_EOL;
