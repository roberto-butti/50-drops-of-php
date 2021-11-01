## Creating array from variables: compact()

If you have some variables like:

```php
$name = "My name";
$surname = "My surname";
```

and you need to create an array where the keys are the name of variables ("name" and "surname") with the values of the variable. It is useful when in a method, you are using some variables, and at the end you need to pass them to a method call in a compact format. Typically in controllers you use some variables and then when you call the template render  and it accepts an array as a list of input values. For the above examples, after calling *compact()* function you will have:

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

For *compact()* function you can list the name of variables as string with multiple parameters, or you can call compact with an array of name of varibles (equivalent behaviour):

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

