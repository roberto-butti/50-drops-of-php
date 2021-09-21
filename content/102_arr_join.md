## join()


If you need to create a string starting from an array you can use _join()_ function.
It concatenates each elements of the array using the string separator.

```php
join("-", ["a", "b", "c"]); // "a-b-c"
```

You can avoid to define the separator, in this case join() will concatenate the elements of array
```php
join(["a", "b", "c"]); // "abc"
```