## Generate and fill a new array: range()

To create an array with a sequence of values you can use *range()* function.

If you need to create an array with values 1,2,3,4,5:

```php
$a = range(1,5);
print_r($a);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
*/
```

You can create a similar array, but with **descending** values:

```php
$a = range(5,1);
print_r($a);
/*
Array
(
    [0] => 5
    [1] => 4
    [2] => 3
    [3] => 2
    [4] => 1
)
*/
```

If you use ascii characters instead of integer, you will create arrays with sequence of chars:

```php
$a = range('a','e');
print_r($a);
/*
Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
)
*/
```

You can also create descending sequence:

```php
$a = range('e','a');
print_r($a);
/*
Array
(
    [0] => e
    [1] => d
    [2] => c
    [3] => b
    [4] => a
)
*/
```

