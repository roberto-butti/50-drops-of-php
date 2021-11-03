<?php

echo str_pad("Hello", 10) . "-" . PHP_EOL;
echo str_pad("Hello", 10, "+") . PHP_EOL;
echo str_pad("Hello", 10, "+*") . PHP_EOL;
echo str_pad("Hello", 10, "+", STR_PAD_BOTH) . PHP_EOL;

/*
Hello     -
Hello+++++
Hello+*+*+
++Hello+++
*/
