## Get temporary directory: sys_get_temp_dir()

If you need to store temporary files you can use the directory returned by sys_get_temp_dir(). It is the default temp directory. 

```php
$tmpDirectory = sys_get_temp_dir();
echo "Temp directory: " . $tmpDirectory;
```
