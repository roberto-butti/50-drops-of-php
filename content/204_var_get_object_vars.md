## Export object properties as array: get_object_vars()
 The function *get_object_vars()* extracts properties or attributes from an object and creates an array with attribute names as keys and attribute values as values.

For example, if you have an object with 2 properties

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

If the property of an object is *private* the property will not be exported by the function *get_object_vars()* due to the scope. In the example look at the property *$active* that is declared as *private*. It is initialised as *true* but it is not exported in the *array*.
