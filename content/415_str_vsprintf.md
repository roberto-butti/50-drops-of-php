## Format a string with an array: vsprintf()
The function *vsprinf()* is similar to *sprintf()*, the difference is that  vsprintf accepts an array of arguments, rather than a variable number of arguments (sprintf).

```php
$parameters = ['John', 25];
$string = vsprintf('Hi %s, you are %d years old. Good bye my friend %1$s', $parameters);
echo $string . PHP_EOL;
```

The format rules are the same for sprintf().





