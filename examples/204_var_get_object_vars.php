<?php

$o =  new StdClass();
$o->title = "Title";
$o->subtitle = "Subtitle";

foreach (get_object_vars($o) as $attributeName => $attributeValue) {
    echo "Attribute:" . $attributeName .
    ", value: " . $attributeValue .
    ", type: " . gettype($attributeValue) . PHP_EOL;
}
print_r(get_object_vars($o));

// @codingStandardsIgnoreStart
class Person
{
    // @codingStandardsIgnoreEnd
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
