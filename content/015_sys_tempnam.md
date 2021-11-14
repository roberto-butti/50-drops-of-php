## Get temp file name: tempnam()

If you need to generate a unique filename for temporary file, you can use *tempnam()* function.
The *tempnam()* function has two parameters:
- *the directory*: the directory where you want to store the file. You can use sys_get_temp_dir() for defining the temp directory;
- *the prefix*: for example if you want to define the first part of the filname.
The tempnam() function returns an absolute path. For example:
```php
$tmpfname = tempnam(sys_get_temp_dir(), "MY-");
// it returns something like: "/private/tmp/MY-awBP4E"
```
If you want to add an extension:
```php
$extension = "txt";
$tmpFilename = tempnam(sys_get_temp_dir(), "MY-");
if ($tmpFilename) {
    $tmpFilename.= "." . $extension;
}
echo $tmpFilename . PHP_EOL;
// it display something like: "/private/tmp/MY-Bfr7If.txt"
```
