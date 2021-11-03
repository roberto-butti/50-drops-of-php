## Converting case of a sentences of strings: mb_convert_case()

You can convert the case of a sentence with *mb_convert_case* function.

You have multiple modes, some of them are pretty similar:

```php
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
```

For example you can convert all chars in upper case with MB_CASE_UPPER, or you can convert all chars in lower case with MB_CASE_LOWER or you can obtain words with the first letter upper case and all others with lower case like "Hello, How Are You?"

```php
foreach ($modes as $mode) {
    echo mb_convert_case('Hello, HOW are yOu?', $mode), PHP_EOL;
}
/*
HELLO, HOW ARE YOU?
hello, how are you?
Hello, How Are You?
hello, how are you?
HELLO, HOW ARE YOU?
hello, how are you?
Hello, How Are You?
hello, how are you?
*/
```

