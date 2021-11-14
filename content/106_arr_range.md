## Generate and fill a new array: range()

To create an array with a sequence of values you can use the *range()* function.

If you need to create an array with the values 1,2,3,4,5:

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

If you use ascii characters instead of integers, you will create an array with the sequence of characters:

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

You can also create in descending sequence:

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

If you are using strings instead of single character, just the first character of the string will be considered:

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

If you want to generate an array with 'A'..'Z' and 'a'..'z' you can't use *range('A','z')* because range for characters is based on the ascii table. In the middle of the ascii table (between upper case and lower case) there are characters like *[\]^_`*. Instead you could use:

```php
$a = array_merge(range('A','Z'), range('a','z'));
```

You can also generate a range of floats. In this case every number of the sequence is incremented (by 1.0) from the previous value:

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

The third parameter (optional, the default is 1) determines the increment for each element. For example, if you want generate odd numbers in the range of 1..10:

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
