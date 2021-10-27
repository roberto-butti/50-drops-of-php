## Check if an element is included in the array:  in_array()

The *in_array()* function

```php
$array = ["a", "b", "c"];
$elementToFind= "z";
$inArray = in_array( $elementToFind, $array); // the $elementToFind is NOT in the $array
$elementToFind= "a";
$inArray = in_array( $elementToFind, $array); // the $elementToFind is in the $array
```
