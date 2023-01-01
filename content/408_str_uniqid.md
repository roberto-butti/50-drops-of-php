## Generate unique string: uniqid()
If you need to generate a unique string, you may use uniqid().

It is not a random generation function. It returns a timestamp with microseconds in string format.

You can prefix a string to distinguish your unique values.
```php
$id = uniqid(); // 6187f27185e08
```
The function *uniqid()* with prefix
```php
$id = uniqid("cache_"); // cache_6187f299640ff
```
The function *uniqid()* with prefix adds more entropy:
```php
$id = uniqid("cache_", true); // cache_6187f2ebbb2ba7.06827816
```
