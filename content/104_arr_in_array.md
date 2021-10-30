## Check if an element is included in the array:  in_array()
The *in_array()* function returns a boolean , *true* if the element is in the array as value (not as key), or *false* if the element is not present.


```php
$array = ["a", "b", "c"];
$elementToFind= "z";
$inArray = in_array( $elementToFind, $array); // the $elementToFind is NOT in the $array
$elementToFind= "a";
$inArray = in_array( $elementToFind, $array); // the $elementToFind is in the $array
```
### Strict comparison
By default the behaviour is to perform a "loose strict" comparison.
It means that, for example true and 1 is considered as "equals".
Why? PHP is
It is the same when you perform a loose comparisons with *==*, for example: *(true == 1)* (is true). If you want a strict comparison you need to use *===*, for example *(true === 1)* (is false). For *in_array()* function, you have the third optional parameter *$strict* to define that you want a strict comparison (loose comparison is the default behaviour). 

| First | Second      | Strict comparison | No strict comparison |
|-------|-------------|-------------------|----------------------|
| 1     | "1"         | false             | true                 |
| null  | array()     | false             | true                 |
| true  | 1           | false             | true                 |
| true  | "Something" | false             | true                 |

For example
```php
$array = array(
    true,
    false,
    0,
    999,
    null,
    "something"
);

in_array(111, $array); // true, because the first element true
in_array(false, $array); // true
in_array(1, $array); // true because the first element true
in_array('another string', $array); // true , because the first element true
in_array(array(), $array); // true, because the second element false
```

### Case Sensitive
The *in_array()* function is case sensitive, it means that the comparison for each elements is case sensitive: "My Test" and "my tesT" are different because the case of the first letter of each word and the latest one.

In order to obtain a way to perform a case insesitive comparison is to use *strtolower* "for each element of the array".
"For each element of the array" is obtained thanks to the *array_map* function. The *array_map* function, applies a function to each element of the array. In this case the function is *strtolower()*

```php
$array = array ("My Test", "second" , "third");
in_array("my tesT", $array); // false because in_array is case sensitive
in_array(strtolower("my tesT"), array_map('strtolower', $array)); // true
```
