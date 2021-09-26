<?php
$tmpDirectory = sys_get_temp_dir();
echo "Temp directory: " . $tmpDirectory . PHP_EOL;
if (is_dir($tmpDirectory)) {
    echo "It exsists!" . PHP_EOL;
} else {
    echo "It doesn't exists" . PHP_EOL;
}
