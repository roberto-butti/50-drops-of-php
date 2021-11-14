## Creating array from variables: compact()

If you have variables like:

```php
$name = "My name";
$surname = "My surname";
```

and you need to create an array where the keys are the name of the variables ("name" and "surname") with the values of the variable values use the *compact()* function. It is useful when in a method you are using variables that you need to pass to another method in a compact format. Typically in controllers you use some variables and then when you call the template render it can accept an array as a list of input values. For the above examples, after calling *compact()* function you will have:

```
Array
(
    [name] => My name
    [surname] => My surname
)
```

You can use compact function:

```php
$name = "My name";
$surname = "My surname";
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

For the *compact()* function you can pass the name of variables as a string with multiple parameters. Or you can call compact with an array of variable names as strings (equivalent behaviour):

```php
$name = "My name";
$surname = "My surname";
$a = compact(["name", "surname"]);
print_r($a);
/*
Array
(
    [name] => My name
    [surname] => My surname
)
*/
```
