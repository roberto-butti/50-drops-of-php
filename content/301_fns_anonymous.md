# Functions

## Anonymous functions

Usually in PHP in order to reuse code and logic you can use functions. A classical declaration of function is something like this:

```php
// Define a classical function
function sum($x, $y) {
    return $x + $y;
}
// call the sum function
echo "Calling sum(5, 3) function: " . sum(5, 3)  . PHP_EOL;
echo "Calling sum(1, 2) function: " . sum(1, 2)  . PHP_EOL;
```

In this example with the "classic declaration of fuction", you have the keyword *function*, then the name of the function (in this case *sum*) and then the parameters (in this case *$x* and *$y*). The name is importante because, later, when you need to "call" the function you need to use the name (for example *sum(5,3)*).

Anonymous functions are functions without a name. You can declare in this way:

```php
// Define anonymous function, and assign it to the $sum variable
$sum = function ($x, $y) {
    return $x + $y;
};

// Call the anonymous function via variable $sum
echo "Calling anonymous function: " . $sum(5, 3) . PHP_EOL;
echo "Calling anonymous function: " . $sum(1, 2) . PHP_EOL;
```

The function has not a name but it is assigned to a variable, in this case *$sum*.

Probably, it may seem a little strange the way you call the anonymous function , it is a mix of using variables *$sum* and define parameters *(5, 3)* .

But why do you need anonymous function? Or better, when do you need to use anonymous function?

Suppose that you have a function that:

- generates a first random number (1..10);
- generates a second random number (1..10);
- applies a function to these two number. The function that you can apply is something that you can pass as parameter and perform an operation with these two numbers and returns a result.

```php
$sum = function ($x, $y) {
    return $x + $y;
};
$mul = function ($x, $y) {
    return $x * $y;
};
function apply($func) {
    $a = rand(1,10);
    $b = rand(1,10);
    return $func($a, $b);
}
echo "APPLY sum : " . apply($sum) . PHP_EOL;
echo "APPLY mul : " . apply($mul) . PHP_EOL;
```

If you declare your *sum* function as anonymous you can assign it to a variable *$sum* and you can passthat function to the *apply* function.

### An example with a PHP core function

Some PHP core function, requires a function as parameter. For example *array_map* requires  to set a function to apply to each array elements:

```php
$a = array_map(function($item) {
    return $item * 2;
}, [ 1,2,3,4,5 ]);
print_r($a);
```

In this case you can refactor, declaring a variable *$double* and assign the function that doubles the argument.

```php
$a = [1, 2, 3, 4, 5];
$double = function ($x) {
    return $x * 2;
};
$b = array_map(
    $double,
    $a
);
print_r($b); // [2,4,6,8,10]
```



