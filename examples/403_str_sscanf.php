<?php

$isbn = "978-0-596-52068-7";
list($ean, $group, $publisher, $title, $check_digit) =
    sscanf($isbn, "%d-%d-%d-%d-%d");
echo "EAN: " . $ean . PHP_EOL;
echo "Group: " . $group . PHP_EOL;
echo "Publisher: " . $publisher . PHP_EOL;
echo "Title: " . $title . PHP_EOL;
echo "Check digit: " . $check_digit . PHP_EOL;


$string = "ABC_abc_1234";
$a = sscanf($string, "%3s_%3s_%4s");
var_dump($a);
