## The fingerprint of a file: md5_file()
The *md5_file()* function calculates the md5 hash of a given file (the fingerprint).

The md5 hash is a string with 32-character hexadecimal number.

It is useful when you need to compare 2 version of the same file, for example it is useful for large files downloaded from internet just to check if the download file is corrupted and / or match with the original file.

Or it is useful to track if a file was changed. If two md5 hash are equals it means that the files are equals.

```php
echo md5_file(__FILE__);
// 0cd9c44d2e3a87fc1217c02f69f78fa6
```

