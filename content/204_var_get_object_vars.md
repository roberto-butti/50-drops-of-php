## Export object properties as array: get_object_vars()
 The function *get_object_vars()* extracts properties or attributes form an object and create an array with attribute name as keys and attribute values as values.

For example if you have an object with 2 properties/attributes

```php
class Person
{
    public string $name;
    public string $surname;
    public int $age;
    private bool $active = true;
}

$person = new Person();
$person->name = "John";
$person->surname = "Doe";
$person->age = 42;

print_r(get_object_vars($person));
/*
Array
(
    [name] => John
    [surname] => Doe
    [age] => 42
)
*/
```

If your code can't access to the property because, for example , the property is *private*, it will be not exported by the function *get_object_vars()* (because the scope). In the example tray to take a look about property *$active* that is declared as *private*, it is initialised as *true* but it is not exported in the *array*.







