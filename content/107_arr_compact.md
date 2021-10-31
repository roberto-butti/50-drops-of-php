## Creating array from variables: compact()

If you have some variables like:

```php
$name = "My name";
$surname = "My surname";
```

and you need to create an array where the keys are the name of variables ("name" and "surname") with the values of the variable, so you need to have:

```
Array
(
    [name] => My name
    [surname] => My surname
)
```

You can use compact function:

```php
$a = compact("name", "surname");
print_r($a);
/*
Array
(
    [name] => My name
    [surname] => My surname
)
*/
```

