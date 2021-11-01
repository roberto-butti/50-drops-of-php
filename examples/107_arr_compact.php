<?php

$name = "My name";
$surname = "My surname";

$a = compact("name", "surname");
print_r($a);

$a = compact(["name", "surname"]);
print_r($a);
