<?php

// Get all env variables
$envVars = getenv();
print_r($envVars);

// Get a specific env variable
$envName = "USER";
$env = getenv($envName);
echo $envName . ": " . $env . " (" . gettype($env) . ")  " . PHP_EOL;

// Get a specific env variable
$envName = "USER";
$env = getenv($envName, true);
echo $envName . ": " . $env . " (" . gettype($env) . ")  " . PHP_EOL;

// Get a specific env variable
$envName = "SOMETHING_NOT_EXISTS";
$env = getenv($envName, true);
echo $envName . ": " . $env . " (" . gettype($env) . ")  " . PHP_EOL;
