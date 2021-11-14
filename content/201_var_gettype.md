# Variables, Constants

## Get variable type: gettype()

If you have a variable and you need to detect the type ("string", "integer", "boolean", ...) you can use the gettype() function.
It returns a string with the name of the type.
```php
// gettype of 1 is an integer
echo gettype(1) . PHP_EOL; // "integer"
//gettype of "1" is a string
echo gettype("1") . PHP_EOL; // "string"
```

It works also with array, object and resources (file opened or closed).
