## Retrieve saved objects or variables: unserialize()
If you need to retrieve an object or an array or a variable previously saved with *serialize()* function, you can use *unserialize()*. It takes a string as input and tries to convert it in a usable variable:

```php
$storage= 'a:4:{i:0;a:2:{s:7:"product";s:4:"Desk";s:5:"price";i:200;}i:1;a:2:{s:7:"product";s:5:"Chair";s:5:"price";i:100;}i:2;a:2:{s:7:"product";s:8:"Bookcase";s:5:"price";i:150;}i:3;a:2:{s:7:"product";s:4:"Door";s:5:"price";i:100;}}';
$new_array = unserialize($storage);
print_r($new_array);
/*
Array
(
    [0] => Array
        (
            [product] => Desk
            [price] => 200
        )

    [1] => Array
        (
            [product] => Chair
            [price] => 100
        )

    [2] => Array
        (
            [product] => Bookcase
            [price] => 150
        )

    [3] => Array
        (
            [product] => Door
            [price] => 100
        )

)
*/
```

