<?php

$handle = opendir('.');
while (false !== ($entry = readdir($handle))) {
    echo $entry . PHP_EOL;
}
closedir($handle);
