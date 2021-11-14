## Get memory usage in bytes: memory_get_usage()
Sometimes you need to calculate or track the memory used by your running script.

The __memory_get_usage()__ function has a boolean parameter.
The default is _false_.
With the default value (_false_), you can get the number of bytes used by your script.
With the parameter set to _true_ you get the bytes pre-allocated for memory pages.

```php
$mem = memory_get_usage();
$mem = memory_get_usage(true);
```
