<?php

$modes = [
    MB_CASE_UPPER,
    MB_CASE_LOWER,
    MB_CASE_TITLE,
    MB_CASE_FOLD,
    MB_CASE_UPPER_SIMPLE,
    MB_CASE_LOWER_SIMPLE,
    MB_CASE_TITLE_SIMPLE,
    MB_CASE_FOLD_SIMPLE
];

foreach ($modes as $mode) {
    echo mb_convert_case('Hello, HOW are yOu? 🚀', $mode), PHP_EOL;
}
/*
HELLO, HOW ARE YOU? 🚀
hello, how are you? 🚀
Hello, How Are You? 🚀
hello, how are you? 🚀
HELLO, HOW ARE YOU? 🚀
hello, how are you? 🚀
Hello, How Are You? 🚀
hello, how are you? 🚀
*/
