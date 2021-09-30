<?php

echo "Concatenates String with -- : " . join("--", ["aa", "bb", "cc"]) . PHP_EOL; // "aa--bb--cc"
echo "Concatenates Strings : " . join(" ", ["How", "are", "you", "?"]) . PHP_EOL; // "How are you ?"

echo "Without separator: " . join(["a", "b", "c"]) . PHP_EOL; // "abc"
echo "Not just string: " . join("_", ["a", 1, true]) . PHP_EOL;
