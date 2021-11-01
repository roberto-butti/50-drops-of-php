<?php

// gettype of 1 is an integer
echo gettype(1) . PHP_EOL; // "integer"
//gettype of "1" is a string
echo gettype("1") . PHP_EOL; // "string"

$array = [
    1,
    "something",
    1.4,
    true,
    null,
    [],

];

foreach ($array as $item) {
    if (is_array($item)) {
        echo print_r($item, true) . ", is a " . gettype($item) . PHP_EOL;
    } else {
        echo $item . ", is a " . gettype($item) . PHP_EOL;
    }
}
