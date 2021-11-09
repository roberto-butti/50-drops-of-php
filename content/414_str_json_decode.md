## From JSON string to PHP object: json_decode()
If you have a string (loaded from a file, or retrieved by a API call) that is in JSON format, you can parse the string and transform it in an associative array or in an object.

>{quote} JavaScript Object Notation (JSON) is a standard text-based format for representing structured data based on JavaScript object syntax. It is commonly used for transmitting data in web applications (e.g., sending some data from the server to the client, so it can be displayed on a web page, or vice versa).

The function *json_decode()* has one mandatory parameter the JSON **string** and returns the object by default (playing with 2 other optional parameters you can obtain the associative array).
If you have a JSON string that represents an object with name and age attributes:
```php
$string = '{"name":"My Name","age":25}';
```
If you want to obtain a object:
```php
$obj = json_decode($string);
```
if you want to obtain an associative array:
```php
$obj = json_decode($string, true);
```
With the second parameter you can manage the type of the output, *false* you want an object, *true* you want an associative array.
### Flags
You have a third parameter *flags*.
With Flags parameter you can control some behavior of the parsing process.
Flag allowed are:

| Constant                     | Meaning                                                      |
| ---------------------------- | ------------------------------------------------------------ |
| JSON_BIGINT_AS_STRING        | it decodes large integers as their original string value instead of float |
| JSON_OBJECT_AS_ARRAY         | It decodes JSON objects as PHP array                         |
| JSON_INVALID_UTF8_IGNORE     | It ignores invalid UTF-8 characters                          |
| JSON_INVALID_UTF8_SUBSTITUTE | It converts invalid UTF-8 characters to the Unicode characher "replacement character" \0xfffd |
| JSON_THROW_ON_ERROR          | It throws JsonException if an error occurs                   |

#### Catching errors in parsing

My suggestion is to use JSON_THROW_ON_ERROR in a try catch block:

```php
// the json string is not correct (name attribute is not correctly quoted)
$string = '{"name:"My Name","age":25}';
try {
    $obj = json_decode($string, flags: JSON_THROW_ON_ERROR);
    var_dump($obj);
} catch (Exception $e) {
    echo "Error parsing Json:" . PHP_EOL;
    echo "ERROR CODE: " . $e->getCode() . PHP_EOL;
    echo "ERROR MSG : " . $e->getMessage() . PHP_EOL;
}

```

#### Big integers

If you have big integers and you want to convert them in a string format instead of the default (float):

```php
$string = '{"name":"My Name","age":251234567890251234567890}';
$obj = json_decode($string, flags: JSON_BIGINT_AS_STRING);
var_dump($obj);
```

#### More than one flag

If you need to specify more than one flag you can use bit mask operator |.

```php
// Multiple flags with bit mask |
try {
    $string = '{"name":"My Name","age":25}';
    $arr = json_decode($string, flags: JSON_THROW_ON_ERROR |
    JSON_BIGINT_AS_STRING | JSON_OBJECT_AS_ARRAY | JSON_INVALID_UTF8_IGNORE);
} catch (JsonException $e) {
    var_dump($e);
}
echo sprintf("Name: %s , age %d" . PHP_EOL, $arr["name"], $arr["age"]);
```

