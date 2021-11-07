## Uncompress content: gzuncompress()
To uncompress content/string previously compressed with *gzcompress()* you can use *gzuncompress()* function.

After that, you will obtain the initial string.

Combined with serialized we are going to implement the following workflow:

- serialize an array;
- compress the serialized array;
- uncompress the compressed data;
- unserialize the uncompressed content

```php
$array = [
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
];

// SERIALIZE the initial array
$string =  serialize($array);
echo "Size after serialize : " . strlen($string) . PHP_EOL;
// COMPRESS the serialized initial array
$compressed = gzcompress($string);
echo "Size after compress  : " . strlen($compressed) . PHP_EOL;
// UNCOMPRESS, the compressed string
$serialized = gzuncompress($compressed);
// UNSERIALIZE, and obtain the initial array
print_r(unserialize($serialized));
```

