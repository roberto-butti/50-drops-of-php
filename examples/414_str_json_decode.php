<?php

$string = '{"name":"My Name","age":25}';

$obj = json_decode($string);
echo sprintf("OBJECT - Name: %s , age %d" . PHP_EOL, $obj->name, $obj->age);

$arr = json_decode($string, true);
echo sprintf("ARRAY - Name: %s , age %d" . PHP_EOL, $arr["name"], $arr["age"]);



// with JSON_BIGINT_AS_STRING a huge integer is convertend into a string
// otherwise is converted into float
$string = '{"name":"My Name","age":251234567890251234567890}';
$obj = json_decode($string, flags: JSON_THROW_ON_ERROR | JSON_BIGINT_AS_STRING | JSON_OBJECT_AS_ARRAY);
var_dump($obj);

// Multiple flgs with bit mask |
try {
    $string = '{"name":"My Name","age":25}';
    $arr = json_decode($string, flags: JSON_THROW_ON_ERROR |
    JSON_BIGINT_AS_STRING | JSON_OBJECT_AS_ARRAY | JSON_INVALID_UTF8_IGNORE);
} catch (JsonException $e) {
    var_dump($e);
}
echo sprintf("Name: %s , age %d" . PHP_EOL, $arr["name"], $arr["age"]);

// Usage of JSON_THROW_ON_ERROR with try catch block
$string = '{"name:"My Name","age":25}';
try {
    $obj = json_decode($string, flags: JSON_THROW_ON_ERROR);
    var_dump($obj);
} catch (JsonException $e) {
    echo "Error parsing Json:" . PHP_EOL;
    echo "ERROR CODE: " . $e->getCode() . PHP_EOL;
    echo "ERROR MSG : " . $e->getMessage() . PHP_EOL;
}
