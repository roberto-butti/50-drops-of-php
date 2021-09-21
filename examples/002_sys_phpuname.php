<?php

$options =  [
  "s" => "Operating System",
  "n" => "Hostname",
  "r" => "Release name",
  "v" => "Version info",
  "m" => "Machine Name",
  "a" => "Full infos"
];

foreach ($options as $key => $title) {
    echo $title . ": " . php_uname($key) . PHP_EOL;
}
