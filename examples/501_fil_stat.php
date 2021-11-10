<?php

$getinfo = function ($filename) {
    $filestat = stat($filename);
    var_dump(sprintf("%'07o", $filestat['mode'] & 0xF000));
    return match ($filestat['mode'] & 0xF000) {
        0xC000 => 'socket',
        0xA000 => 'symbolic link',
        0x8000 => 'regular',
        0x6000 => 'block special',
        0x4000 => 'directory',
        0x2000 => 'character special',
        0x1000 => 'fifo pipe',
        default => 'unknown file',
    };
};

echo $getinfo(__FILE__) . PHP_EOL;
echo $getinfo(__DIR__) . PHP_EOL;
