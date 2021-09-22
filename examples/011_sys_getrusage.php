<?php

// $mode default, == 0
$resources = getrusage();
foreach ($resources as $key => $value) {
    echo "=> " . $key . ": " . $value . PHP_EOL;
}


// $mode 1
$resources = getrusage(1);
foreach ($resources as $key => $value) {
    echo "=> " . $key . ": " . $value . PHP_EOL;
}
// $mode 1 after executing an external process
exec('sleep 1');
$resources = getrusage(1);
foreach ($resources as $key => $value) {
    echo "=> " . $key . ": " . $value . PHP_EOL;
}
