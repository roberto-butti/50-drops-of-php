<?php

$printArray = function ($files) {
    foreach ($files as $filename) {
        echo $filename . PHP_EOL;
    }
};

echo "Default sorting (ascending) : " . PHP_EOL;
$files = scandir(__DIR__);
$printArray($files);

echo "Descending sorting : " . PHP_EOL;
$files = scandir(__DIR__, SCANDIR_SORT_DESCENDING);
$printArray($files);

echo "No sorting : " . PHP_EOL;
$files = scandir(__DIR__, SCANDIR_SORT_NONE);
$printArray($files);

echo "Without . and .. : " . PHP_EOL;
$files = array_diff(scandir(__DIR__), [".", ".."]);
$printArray($files);

echo "with stat file:" . PHP_EOL;
$files = array_diff(scandir(__DIR__), [".", ".."]);
$filesDetail = array_map(
    function ($item) {
        return [$item => stat(__DIR__ . "/" . $item)];
    },
    $files
);
var_dump($filesDetail);
