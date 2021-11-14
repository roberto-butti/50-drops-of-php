## Portable directory separator: DIRECTORY_SEPARATOR

If you are writing a script that needs to run on different operating systems and/or platforms, you need to avoid the "it works on my machine" approach.
For example, when you need to create a filesystem path, on some operating systems the directory separator character is a *slash*, on others it is a *backslash*. If you want your script to run on every operating system supported by PHP my suggestion is to use the DIRECTORY_SEPARATOR constant.

If you have a path, with sub directories, you can also use the *implode()* function, and DIRECTORY_SEPARATOR as the implode separator:

```php
$dir = implode(DIRECTORY_SEPARATOR, [".", "vendor","illuminate", "support"]);
```
