## Return current UNIX timestamp: microtime()

The function _microtime()_ returns the current UNIX timestamp in seconds, with microseconds.
The function _microtime()_ may have a input boolean parameter to control the output:
- no input or input _false_: it returns a string in the form "msec sec";
```php
// Calling microtime with no parameter ("false" is the default),
// it returns a string in the form "msec sec"
$microtime = microtime();
$microtimeType = gettype($microtime);
echo $microtime . " (" . $microtimeType . ")" . PHP_EOL;
```
- input _true_: it returns a float sec.msec.
```php
// Calling microtime with "true" parameter,
// it returns a float sec.msec
$microtime = microtime(true);
$microtimeType = gettype($microtime);
echo $microtime . " (" . $microtimeType . ")" . PHP_EOL;
```

## Why you need to avoid to use microtime() to measure the time
If you need to measure the time consumed, like a stopwatch or timer, you should use _hrtime()_ function.
This because _microtime()_ it reads the current time from the clock.
If you read the start time and the end time to calculate the difference you could see some inconsistancy. For example, let's try to think about if the datetime is changed in the mean while (manually or some software like ntp will update the clock, so the date time).


>{warning} If you need to measure time like a stopwatch or timer, you should use another function _hrtime()_.

