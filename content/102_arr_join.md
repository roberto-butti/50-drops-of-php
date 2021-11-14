## A string from an array:  join()

If you need to create a string starting from an array you can use the _join()_ function.
For example:
- you have an array ["a", "b" , "c"] and you want to obtain "abc";
- you have an array ["a", "b" , "c"] and you want to obtain "a-b-c" (with "-" as the separator);
It concatenates each element of the array using the string separator.
The elements may be: string, character, number, boolean.
The separator may be a string (or just one character).

If you have an array of characters and you want to obtain a string with "-" as the separator:
```php
$string = join("-", ["a", "b", "c"]); // "a-b-c"
```
You can also use a longer string as the separator:
```php
$string = join("--", ["aa", "bb", "cc"]); // "aa--bb--cc"
```

If you have an array of strings and you want to obtain a string with " " as the separator:
```php
$string = join(" ", ["How", "are", "you", "?"]); // "How are you ?"
```
You can _join_ not just strings but numbers and booleans as well:
```php
$string = join("_", ["a", 1, true]); // "a_1_1"
```

You can omit the separator to concatenate the elements of the array
```php
$string = join(["a", "b", "c"]); // "abc"
```
