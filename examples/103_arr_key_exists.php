<?php

$arr = ["a", "b"];
$exists = key_exists(0, $arr); // true
var_dump($exists);
$exists = key_exists(1, $arr); // true
var_dump($exists);
$exists = key_exists(2, $arr); // false
var_dump($exists);

$arr = ["a" => "first one", "b" => "second one"];
$exists = key_exists("a", $arr); // true
var_dump($exists);
$exists = key_exists("b", $arr); // true
var_dump($exists);
$exists = key_exists("c", $arr); // false
var_dump($exists);
