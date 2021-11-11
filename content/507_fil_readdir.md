## Read dir: readdir()
If you need to parse a directory, retrieving all files also hidden file etc, you can use *readdir()* function.

Two things:

- it needs to be used with *opendir()* and *closedir()*;
- it doesn't returns immediately all the files but one by one, so you need to loop through the *readdir()* results

```php
// open the directory and obtian an handle variable
$handle = opendir('.');
// loops through "readdir"
while (false !== ($entry = readdir($handle))) {
    echo $entry . PHP_EOL;
}
// close the handle variable
closedir($handle);
```

