## Arrow Functions with PHP

Arrow functions are similar to anonymous function, but they have a more concise syntax and limited usage.

```php
// Define a classical function
function sum_classic($x, $y) {
    return $x + $y;
}
// define an anonymous function
$sum_anonymous = function ($x, $y) {
    return $x + $y;
};
// define arrow function
$sum_arrow = fn($x, $y) => $x+y;


```

Another difference between anonymous and the arrow function, is that the arrow function has visibility on the "external" scope. In the next example, 2 variables, $a and $b are declared and initialized outside the arrow function, and are used in the expression of the arrow function.

```php
$a = 4;
$b= 5;
$sumx = fn() => $a + $b;
echo $sumx() . PHP_EOL;
```
