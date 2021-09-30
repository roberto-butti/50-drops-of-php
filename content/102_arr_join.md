## join()

If you need to create a string starting from an array you can use _join()_ function.
For example:
- you have an array ["a", "b" , "c"] and you want to obtain "abc";
- you have an array ["a", "b" , "c"] and you want to obtain "a-b-c" (with "-" as separator);
It concatenates each elements of the array using the string separator.
The elements may be: string, character, number, boolean.
The separator my be a string (or just one character).

If you have an array of chars and you want to obtain a string with "-" as separator:
```php
join("-", ["a", "b", "c"]); // "a-b-c"
```
If you have an array of strings and you want to obtain a string with " " as separator:
```php
join(" ", ["How", "are", "you", "?"]); // "How are you ?"
```
You can _join_ not just strings but numbers and booleans:
```php
join("_", ["a", 1, true]); // "a_1_1"
```

You can avoid to define the separator, in this case join() will concatenate the elements of array
```php
join(["a", "b", "c"]); // "abc"
```

