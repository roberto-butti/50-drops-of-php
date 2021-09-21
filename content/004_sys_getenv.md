## Get environment variable value: getenv()

The function _getenv_ retrieves the value of a environment variable.
The function has a optional parameter: the name of the variable.
It returns a string with the value of the variable.
For example, in order to display the environment variable PATH:
```php
echo getenv("PATH");
```
If you use a name of variable that not exists, it returns boolean value _false_:
```php
echo getenv("var_that_not_exists"); // bool false
```

### All environment variables
If you call the function without any parameter, you will obtain all environment variables.
```php
$envVars = getenv();
print_r($envVars); // array of strings
```
