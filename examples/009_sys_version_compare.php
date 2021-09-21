<?php

$version = phpversion();
echo $version . PHP_EOL;

$min_version = "8.0.0";

if (version_compare($version, $min_version) > 0) {
    echo "NEWER!   You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
} elseif (version_compare($version, $min_version) < 0) {
        echo "OLDER!  You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
} else { // version_compare is 0
    echo "EQUALS!  You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
}



if (version_compare($version, $min_version, "ge")) {
    echo "OK!   You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
} else {
    echo "OPS!  You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
}
