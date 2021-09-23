<?php



// Calling hrtime with no parameter ("false" is the default),
// it returns an array of integers in the form [seconds, nanoseconds]
$monotonictime = hrtime();
$monotonictimeType = gettype($monotonictime);
print_r($monotonictime);
echo "(" . $monotonictimeType . ")" . PHP_EOL;

// Calling hrtime with "true" parameter,
// it returns a int (nanoseconds)
$monotonictime = hrtime(true);
$monotonictimeType = gettype($monotonictime);
echo $monotonictime . " (" . $monotonictimeType . ")" . PHP_EOL;
