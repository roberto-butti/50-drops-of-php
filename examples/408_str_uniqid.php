<?php

foreach (range(1, 10) as $i) {
    echo uniqid("cache_", true) . PHP_EOL;
}
