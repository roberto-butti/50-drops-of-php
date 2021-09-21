<?php

$zend_extensions = true;
$extensions = get_loaded_extensions($zend_extensions);
foreach ($extensions as $key => $extension) {
    echo "-> " . $extension . PHP_EOL;
}
