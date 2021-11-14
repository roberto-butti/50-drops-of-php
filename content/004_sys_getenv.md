## Get environment variable value: getenv()

The function _getenv_ retrieves the value of an environment variable.
The function has an optional parameter: the name of the variable.
It returns a string with the value of the variable.
For example, in order to display the environment variable PATH:
```php
echo getenv("PATH");
```
If you use a name of variable that does not exist, it returns the boolean value _false_:
```php
echo getenv("var_that_not_exists"); // bool false
```

### All environment variables
If you call the function without any parameter all environment variables will be returned as an _array_:
```php
$envVars = getenv();
print_r($envVars); // array of strings
```
