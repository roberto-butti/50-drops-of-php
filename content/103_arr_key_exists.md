## Check if a key exists in the array:  key_exists()

The *key_exists()* function as an alias *array_key_exists()*.
You can use *key_exists()* in order to check if the key exists and you can access to it.

For a non associative array the keys are 0, 1, 2 ...

```php
$arr = ["a", "b"];
$exists = key_exists(0, $arr); // true
$exists = key_exists(1, $arr); // true
$exists = key_exists(2, $arr); // false
```

For an associative array
```php
$arr = ["a" => "first one", "b" => "second one"];
$exists = key_exists("a", $arr); // true
$exists = key_exists("b", $arr); // true
$exists = key_exists("c", $arr); // false
```
