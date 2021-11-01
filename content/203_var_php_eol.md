## Portable end of line: PHP_EOL()
 If you need to echo some output e you need a portable end of line my suggestion is to use the constant PHP_EOL instead of \n or \r\n.

```php
echo "Title" . PHP_EOL . "Subtitle" . PHP_EOL;
```



