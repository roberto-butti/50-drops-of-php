## Store objects or variables: serialize()
In your PHP application, project or script you use object or arrays or variables to manage data.

If you need to store the data (for example dumping the whole status of a object with all attributes and all values with one function you can use the *serialize()* function.

```php
$array = [
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
];
echo serialize($array);
```

It is very useful if you need to save the state of your complex variables (objects and/or arrays).

The function *serialize()* returns a string so you can save it in a database field, or a text file, or a caching system.

