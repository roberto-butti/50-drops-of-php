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

If you are using strings instead of single char, just the first char of the string will be considered:

```php
$a = range('anaconda','elephant');
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

If you want to generate an array with 'A'..'Z' and 'a'..'z' you can't use *range('A','z')* because range for chars, follow the ascii table. In the middle, between upper case and lower case , in the ascii table you have some chars *[\]^_`* instead probably you could use:

```php
$a = array_merge(range('A','Z'), range('a','z'));
```

You can also use float. In this case every number of the sequence is the increment (by 1.0) of the previous one:

```php
$a = range(1.5, 4.45);
print_r($a);
/*
Array
(
    [0] => 1.5
    [1] => 2.5
    [2] => 3.5
)
*/
```

### Step

The third parameters (optional, the default is 1) determines the increment for each elements. For example if you want generate odd number in the range 1..10:

```php
$a = range(1,10,2);
print_r($a);
/*
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 9
)
*/
```

The step parameter can be negative:

```php
$a = range(10,1,-2);
print_r($a);
/*
Array
(
    [0] => 10
    [1] => 8
    [2] => 6
    [3] => 4
    [4] => 2
)
*/
```

