# Appendix

As additional content for this book, you can find a cheat sheet about PHP array functions.

## Cheat sheet for PHP array functions
Cheat sheet for showing some "use cases" about PHP array functions like: append, join, extraction, search,  sort, edit, map, filter.

### Append arrays
Returns a new array, appending input arrays with array unpacking
```php
$arr = [1,2,3,4,5];
$output = [...$arr, ...[10,11,12]];
print_result($output);
// ARRAY   : 1,2,3,4,5,10,11,12
```

Returns a new array, appending input arrays with array_merge
```php
$arr = [1,2,3,4,5];
$output = array_merge($arr, [10,11,12]);
print_result($output);
// ARRAY   : 1,2,3,4,5,10,11,12
```

### Joins elements into string
Joins all elements into a string with a separator
```php
$arr = [1,2,3,4,5];
$output = implode(",", $arr);
print_result($output);
// STRING  : 1,2,3,4,5
```

### A section of an array
Returns a section of an array from *$start* to *$end*
```php
$start = 0;
$end = 3;
$arr = [1,2,3,4,5];
$output = array_slice($arr, $start, $end);
print_result($output);
// ARRAY   : 1,2,3
```

### Find the first occurrence
Returns the index of the first occurrence of element in array
```php
$arr = [1,2,3,4,5, 1,2,3,4,5];
$element = 4;
$output = array_search($element, $arr);
print_result($output);
// INTEGER : 3
```

### Find the last occurrence
Returns the index of the last occurrence of element in array
```php
$arr = [1,2,3,4,5, 1,2,3,4,5];
$element = 4;
$output = array_search(4, array_reverse($arr, true));
print_result($output);
// INTEGER : 8
```

### A function for each element
Calls function for each element of array (the array is unchanged)
```php
$arr = [1,2,3,4,5];
$output = array_walk($arr, function ($element) {
    $double = $element * 2;
});
print_result($output);
print_result($arr);
// BOOLEAN : true
// ARRAY   : 1,2,3,4,5
```

### All elements match an expression
Returns true if all elements match a condition
```php
$arr = [1,2,3,4,5];
$result = array_reduce($arr, fn($result, $element) => $result && ($element > 0), true);
print_result($result);
// BOOLEAN : true
```

### At least 1 element matches an expression
Returns true if at least 1 element matches a condition
```php
$arr = [1,2,3,4,5];
$result = array_reduce($arr, fn($result, $element) => $result || ($element >= 5), false);
print_result($result);
// BOOLEAN : true
```

### Filter elements
Returns new array, with element that matches the fn() function
```php
$arr = [1,2,3,4,5];
$result = array_filter($arr, fn($element) => $element > 3);
print_result($result);
// ARRAY   : 4,5
```

### Apply a function for each element
Returns new array with the results of running fn on every element
```php
$arr = [1,2,3,4,5];
$result = array_map(fn($element) => $element + 3, $arr);
print_result($result);
// ARRAY   : 4,5,6,7,8
```

### Flatten array
Returns a flatten array of a nested array
```php
$nestedArray = [1, [2,3], [4,5,6], 7];
$result = array_reduce($nestedArray, fn($result, $element) => array_merge($result, is_array($element) ? [...$element] : [$element]), []);
print_result($result);
// ARRAY   : 1,2,3,4,5,6,7
```

### Change some elements
Changes all elements in range to a the specified value
```php
$arr = [1,2,3,4,5,6,7,8,9];
$start = 2;
$count = 6;
$result = array_replace($arr, array_fill($start, $count, 88));
print_result($result);
// ARRAY   : 1,2,88,88,88,88,88,88,9
```

### Apply a function with all elements
Returns a single value which is the function's accumulated result L2R
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = array_reduce($arr, fn($result, $element) => $result + $element, 0);
print_result($result);
// INTEGER : 45
```

Returns a single value which is the function's accumulated result R2L
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = array_reduce(array_reverse($arr), fn($result, $element) => $result + $element, 0);
print_result($result);
// INTEGER : 45
```

### Last element
Removes and returns last element from array
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = array_pop($arr);
print_result($result);
print_result($arr);
// INTEGER : 9
// ARRAY   : 1,2,3,4,5,6,7,8
```

### Prepends an element
Add element at the start of an array and return new length
```php
$arr = [1,2,3,4,5,6,7,8,9];
$newElement = 99;
$result = array_unshift($arr, $newElement);
print_result($result);
print_result($arr);
// INTEGER : 10
// ARRAY   : 99,1,2,3,4,5,6,7,8,9
```

### Add element at the end
Adds element to the end of arr and returns new length
```php
$arr = [1,2,3,4,5,6,7,8,9];
$newElement = 99;
$result = array_push($arr, 99);
print_result($result);
print_result($arr);
// INTEGER : 10
// ARRAY   : 1,2,3,4,5,6,7,8,9,99
```

### Reverse an array
Reverse order of an array
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = array_reverse($arr);
print_result($result);
// ARRAY   : 9,8,7,6,5,4,3,2,1
```

### Sorting
Sort the elements of an array
```php
$arr = [5,3,4,1,2,9,7,8,6];
$result = sort($arr);
print_result($arr);
// ARRAY   : 1,2,3,4,5,6,7,8,9
```

### Remove/replacing/adding elements
Changes content of arr removing, replacing and adding elements at position $start, it removes $count elements and insert it returns the elements removed, and changes the $arr
```php
$arr = [1,2,3,4,5,6,7,8,9];
$start = 4;
$count = 3;
$newElements = [70,71];
$result = array_splice($arr, $start, $count, $newElements);
print_result($result); // removed elements
print_result($arr); // changed array
// ARRAY   : 5,6,7
// ARRAY   : 1,2,3,4,70,71,8,9
```

### Stringify and array
Returns a string representing arr its elements
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = implode("", $arr);
print_result($result);
// STRING  : 123456789
```

### Length
Returns length of an array
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = count($arr);
print_result($result);
// INTEGER : 9
```

### Is array?
Returns true if $arr is an array
```php
$arr = [1,2,3,4,5,6,7,8,9];
$result = is_array($arr);
print_result($result);
// BOOLEAN : true
```