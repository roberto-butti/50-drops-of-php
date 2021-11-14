## Get temporary directory: sys_get_temp_dir()

If you need to store temporary files you can use the path returned by sys_get_temp_dir(). The default is the temp directory.

```php
$tmpDirectory = sys_get_temp_dir();
echo "Temp directory: " . $tmpDirectory;
```
