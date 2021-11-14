# Array

## Apply function to each array element: array_map()
If you want to apply logic (a function) for each element of an array, you may use the *array_map()* function.
This results in the creation of a new array of the same length with the modified elements.
The first parameter is the function name and the second parameter is the array to apply the function to.
A new array is returned with the values modified by the function defined as the first parameter.



```php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
```
