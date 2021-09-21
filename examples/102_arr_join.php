<?php

echo "Concatenates String with -- : " . join("--", ["aa", "bb", "cc"]) . PHP_EOL; // "aa--bb--cc"
echo "Without separator: " . join(["a", "b", "c"]) . PHP_EOL; // "abc"
echo "Not just string: " . join("_", ["a", 1, true]) . PHP_EOL;
