<?php

// Calling microtime with no parameter ("false" is the default),
// it returns a string in the form "msec sec"
$microtime = microtime();
$microtimeType = gettype($microtime);
echo $microtime . " (" . $microtimeType . ")" . PHP_EOL;

// Calling microtime with "true" parameter,
// it returns a float sec.msec
$microtime = microtime(true);
$microtimeType = gettype($microtime);
echo $microtime . " (" . $microtimeType . ")" . PHP_EOL;
