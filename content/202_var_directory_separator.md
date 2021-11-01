## Portable directory separator: DIRECTORY_SEPARATOR

If you are writing a script that needs to run on different operating system and/or platform, you need to avoid "it works on my machine" approach.
For example when you need to create a filesystem path, on some OS the directory separator character is *slash*, or some other *backslash*. If you want that your script/project runs on every operating system supported by PHP, my suggestion is to use DIRECTORY_SEPARATOR constant. 

If you have a path, with some sub directories, you can use also *implode()* function, and DIRECTORY_SEPARATOR as implode separator:

```php
$dir = implode(DIRECTORY_SEPARATOR, [".", "vendor","illuminate", "support"]);
```
