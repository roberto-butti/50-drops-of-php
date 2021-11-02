# The Book: 50 drops of PHP

![50 drops of PHP book](assets/social_cover-50-drops-of-php-book.png)

 This book collects some useful, unknown, underrated PHP functions or stuff discovered, used, learned during the PHP daily use.

This book will show you 50 features that are typically underused or underrated.

Using frameworks on a daily basis, sometimes the perception of the power of the language and of the basic functionalities provided by the PHP core is lost.

## Work in progress

Table of Content

- Welcome to 50 drops of PHP
    - The reason why
- System
    - Get used PHP version: phpversion()
    - Display OS information: php_uname()
    - Get memory usage in bytes: memory_get_usage()
    - Get environment variable value: getenv()
        - All environment variables
    - How to exit: exit()
        - Exit parameter
    - Shutdown function: register_shutdown_function()
    - Listening signals: pcntl_signal()
    - Loaded PHP modules: get_loaded_extensions()
    - Compare versions: version_compare()
        - Comparing without operator
        - Comparing with operator
    - Retrieve the current Process Identifier: getmypid()
    - Get resources usage: getrusage()
        - The input parameter $mode
    - Return current UNIX timestamp: microtime()
    - Why you need to avoid to use microtime() to measure the time
    - Get monotonic time: hrtime()
    - Get temporary directory: sys_get_temp_dir()
    - Get temp file name: tempnam()
- Array
    - Apply function to each array elements: array_map()
    - A string from an array:  join()
    - Check if a key exists in the array:  key_exists()
    - Check if an element is included in the array:  in_array()
        - Strict comparison
        - Case Sensitive
    - Merge two arrays: array_merge()
        - Key collision: array merge of arrays with numeric keys
        - Key collision: array merge of arrays with strings keys
    - Generate and fill a new array: range()
        - Step
    - Creating array from variables: compact()
- Variables, Constants
    - Get variable type: gettype()
    - Portable directory separator: DIRECTORY_SEPARATOR
    - Portable end of line: PHP_EOL()
    - get_object_vars()
    - Anonymous functions
        - The simplest use case
        - Another example
        - Apply an anonymous function as a function parameter
        - Refactor a callback with anonymous function
- Strings
    - str_pad()
    - mb_convert_case()
    - sscanf()
    - sprintf()
    - ctype_alpha()
    - ctype_digit()
    - ctype_lower()
    - uniqid()
    - serialize()
    - unserialize()
    - gzcompress()
    - gzuncompress()
    - trim()
    - yaml-parse()
    - vsprintf()
    - sscanf()
- Files
    - lstat()
    - scandir()
    - pathinfo()
    - mkdir()
    - md5_file()
    - glob()
    - readdir()