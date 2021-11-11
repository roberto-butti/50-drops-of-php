## Split filename infos: pathinfo()
The function **pathinfo()** is useful when you have a filename and you want to obtain:

- dirname: the directory
- basename: the filename with extension
- extension: the extension
- filename: the filename without extension

```php
$path_parts = pathinfo(__FILE__);
print_r($path_parts);
/*
Array
(
    [dirname] => /Users/user/project/BOOKS/50-drops-of-php/examples
    [basename] => 503_fil_pathinfo.php
    [extension] => php
    [filename] => 503_fil_pathinfo
)
*/
```

The input is a string with the filename, the result is an associative array with dirname, basename, extension, filename.

