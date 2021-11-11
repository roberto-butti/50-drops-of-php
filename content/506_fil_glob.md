## Find files that match a pattern: glob()
If you need to retrieve all filenames that match a pattern you can use *glob()* function.

A pattern can be:

- *.php : all files with php extension
- ?aaa.txt : all files that starts with a character followed by aaa.txt (for example baaa.txt, caaa.txt ...)

The special characters you can use are:

- \* Matches zero or more characters.
- ? Matches exactly one character (any character).
- [...] Matches one character from a group of characters. If the first character is !, matches any character not in the group.

It returns an array with all matching filenames.

For example, if you want to obtain all filenames that begin with or 0 or 1 or 2 character and with php extension:

```php
var_dump(glob("examples/[012]*.php"));
```



