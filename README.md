# The Book: 50 drops of PHP

![50 drops of PHP book](assets/social_cover-50-drops-of-php-book.png)

This book collects 50 useful, unknown, underrated PHP functions or stuff discovered, used, learned during the PHP daily use.

Using frameworks daily, sometimes the perception of the power of the language and of the basic functionalities provided by the PHP core could be lost. I see that usually I used to look the framework documentation or looking for a package in Packagist for system, array, string functions instead using some core functionalities provided by the language.

## Download PDF version for FREE

You can download your PDF version here: https://hifolks.gumroad.com/l/50-drops-of-php?price=0


## Work in progress

Table of Content

- Welcome to 50 drops of PHP
    - The reason why
        - Continuous release
        - Where to find this book
        - Thanks to...
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
    - Export object properties as array: get_object_vars()
- Functions
    - Anonymous functions
        - An example with a PHP core function
    - Arrow Functions with PHP
- Strings
    - Padding strings: str_pad()
    - Converting case of a sentences of strings: mb_convert_case()
    - Parse string: sscanf()
    - Format a string: sprintf()
        - Padding
        - Numbers (integers)
        - Numbers (floats)
        - Formatting cheat sheet
    - Validating string, alphabetics: ctype_alpha()
    - Validating string, digits: ctype_digit()
    - Validate strings, lower case letters: ctype_lower()
    - Generate unique string: uniqid()
    - Store objects or variables: serialize()
    - Retrieve saved objects or variables: unserialize()
    - Compress content: gzcompress()
    - Uncompress content: gzuncompress()
    - Delete characters: trim()
    - From JSON string to PHP object: json_decode()
        - Flags
        - Catching errors in parsing
        - Big integers
        - More than one flag
    - Format a string with an array: vsprintf()
- Files
    - File information: stat()
        - Symbolic link information
    - Parsing directory: scandir()
    - Split filename infos: pathinfo()
    - Create a directory: mkdir()
        - Permissions
        - Nested directories
    - The fingerprint of a file: md5_file()
    - Find files that match a pattern: glob()
    - Read dir: readdir()
