<?php

$name = 'John';
$age = 25;
$string = sprintf('Hi %s, you are %d years old. Good bye my friend %1$s', $name, $age);
echo $string . PHP_EOL;
