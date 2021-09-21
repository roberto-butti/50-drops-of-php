# Functions

## Anonymous functions

You can assign a function to a variable.
This function has not a name.
It is useful on some use cases for example when you need to pass a function to another function as value.
### The simplest use case
- You can define an anonymous function that has 2 input parameter $x and $y;
- The function returns the sum of $x and $y;
- The function is assigned to $sum variable;
- You can call the function via the variable $sum.

```php
$sum = function($x, $y)
{
    return $x + $y;
};

echo $sum(5,3) . PHP_EOL;
echo $sum(1,2) . PHP_EOL;
```

### Another example

```php
$double = function($x)
{
    return $x * 2;
};

echo $double(5) . PHP_EOL;
echo $double(7) . PHP_EOL;
```

### Apply an anonymous function as a function parameter

Some functions require a function as parameter.
For example
- array_map: you need to set a function to apply to each array elements;
- array_walk: send the couple key/value of array elements to a function;

```php
$a = array_map(function($item) {
    return $item * 2;
}, [ 1,2,3,4,5 ]);
print_r($a);
```

### Refactor a callback with anonymous function

```php
function shutdown() {
    echo 'Shutting down.', PHP_EOL;
}
register_shutdown_function("shutdown");
exit("Good bye!");
```



```php
register_shutdown_function(function () {
    echo 'Shutting down.', PHP_EOL;
});

exit("Good bye!");
```
