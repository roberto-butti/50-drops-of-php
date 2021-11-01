<?php

$o =  new StdClass;
$o->title = "Title";
$o->subtitle = "Subtitle";

foreach (get_object_vars($o) as $attributeName => $attributeValue) {
    echo "Attribute:" . $attributeName .
    ", value: " . $attributeValue .
    ", type: " .gettype($attributeValue).PHP_EOL;
}
print_r(get_object_vars($o));
