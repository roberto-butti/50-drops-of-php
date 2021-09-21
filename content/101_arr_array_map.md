# Array

## Apply function to each array elements: array_map()

Suppose that you have an array.
Suppose that you want to apply some logic for each element.
You will have as result a new array with the same length with the new elements.
You can use *array_map()*, the first parameter is the function name and the second parameter is the array to apply the function defined.
It returns a new array that is the result of the function defined as first parameter.



```php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
```