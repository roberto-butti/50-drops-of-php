## Get monotonic time: hrtime()

> {notice} A monotonic clock is a time source that won't ever jump forward or backward (due to NTP or Daylight Savings Time updates)

When you need to calculate the elapsed time between two points you will need to save the start time and the end time to calculate the difference. The elapsed time should not be affected by external behaviour like time modification by an external software (NTP) or time adjustment.

The _hrtime()_ returns an array of two integers:
- seconds
- nanoseconds

```php
// Calling hrtime with no parameter ("false" is the default),
// it returns an array of integers in the form [seconds, nanoseconds]
$monotonictime = hrtime();
$monotonictimeType = gettype($monotonictime);
print_r($monotonictime);
echo "(" . $monotonictimeType . ")" . PHP_EOL;
```

The _hrtime()_ function may also have an input boolean parameter *$as_number*. If the parameter is set to _true_, then an _int_ is returned (nanoseconds).

```php
// Calling hrtime with "true" parameter,
// it returns a int (nanoseconds)
$monotonictime = hrtime(true);
$monotonictimeType = gettype($monotonictime);
echo $monotonictime . " (" . $monotonictimeType . ")" . PHP_EOL;
```
