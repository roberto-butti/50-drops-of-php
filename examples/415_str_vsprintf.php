<?php

$parameters = ['John', 25];
$string = vsprintf('Hi %s, you are %d years old. Good bye my friend %1$s', $parameters);
echo $string . PHP_EOL;
