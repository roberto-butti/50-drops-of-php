<?php

// Inital memory usage
$memory = memory_get_usage();
echo $memory . " bytes " . PHP_EOL;
echo $memory / 1024 . " kb " . PHP_EOL;
echo $memory / (1024 * 1024) . " mb " . PHP_EOL;

// I'm going to do something that allocates memory
$a = range(0, 10000);

// Memory usage
$memory = memory_get_usage();
echo $memory . " bytes " . PHP_EOL;
echo $memory / 1024 . " kb " . PHP_EOL;
echo $memory / (1024 * 1024) . " mb " . PHP_EOL;
