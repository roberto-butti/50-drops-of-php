## Compress content: gzcompress()
If you have some content in string format you can try to save space (in terms of bytes) compressing it.

For example, after performing serializing array or a big object you may want to compress the string obtained to save space.

Let's try to do this:

- define an array,
- serialize the array into a string
- compress the string

After serializing and after compressing you could check the size of the string, and you will see that you can save 50% of the space.


```php
$array = [
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
];

$string =  serialize($array);
echo "Size after serialize : " . strlen($string) . PHP_EOL;
echo "Size after compress  : " . strlen(gzcompress($string)) . PHP_EOL;
```

You can set the level of compression, from 0 to 9. 0 means no compression, 9 means maximum compression (slower), the default is 6.
