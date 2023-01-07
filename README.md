# The Book: 50 drops of PHP

![50 drops of PHP book](assets/social_cover-50-drops-of-php-book.png)

This book collects 50 useful, unknown, underrated PHP functions or stuff discovered, used, learned during the PHP daily use.

Using frameworks daily, sometimes the perception of the power of the language and of the basic functionalities provided by the PHP core could be lost. I see that usually I used to look the framework documentation or looking for a package in Packagist for system, array, string functions instead using some core functionalities provided by the language.

## Download PDF version for FREE

You can download your PDF version here: https://hifolks.gumroad.com/l/50-drops-of-php?price=0

## License
"50 drops of PHP" (c) by Roberto Butti

"50 drops of PHP" is licensed under a
Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License.

You should have received a copy of the license along with this
work. If not, see <http://creativecommons.org/licenses/by-nc-sa/4.0/>.

## 50 drops of PHP

Table of Content

- Welcome to 50 drops of PHP
    - [The reason why](content/000_intro.md#the-reason-why)
        - [Continuous release](content/000_intro.md#continuous-release)
        - [Where to find this book](content/000_intro.md#where-to-find-this-book)
        - [Thanks to...](content/000_intro.md#thanks-to)
        - [License](content/000_intro.md#license)
    - [Get used PHP version: phpversion()](content/001_sys_phpversion.md#get-used-php-version-phpversion)
    - [Display OS information: php_uname()](content/002_sys_phpuname.md#display-os-information-php_uname)
    - [Get memory usage in bytes: memory_get_usage()](content/003_sys_memory_get_usage.md#get-memory-usage-in-bytes-memory_get_usage)
    - [Get environment variable value: getenv()](content/004_sys_getenv.md#get-environment-variable-value-getenv)
        - [All environment variables](content/004_sys_getenv.md#all-environment-variables)
    - [How to exit: exit()](content/005_sys_exit.md#how-to-exit-exit)
        - [Exit parameter](content/005_sys_exit.md#exit-parameter)
    - [Shutdown function: register_shutdown_function()](content/006_sys_register_shutdown_function.md#shutdown-function-register_shutdown_function)
    - [Listening signals: pcntl_signal()](content/007_sys_pcntl_signal.md#listening-signals-pcntl_signal)
    - [Loaded PHP modules: get_loaded_extensions()](content/008_sys_get_loaded_extensions.md#loaded-php-modules-get_loaded_extensions)
    - [Compare versions: version_compare()](content/009_sys_version_compare.md#compare-versions-version_compare)
        - [Comparing without operator](content/009_sys_version_compare.md#comparing-without-operator)
        - [Comparing with operator](content/009_sys_version_compare.md#comparing-with-operator)
    - [Retrieve the current Process Identifier: getmypid()](content/010_sys_getmypid.md#retrieve-the-current-process-identifier-getmypid)
    - [Get resource usage: getrusage()](content/011_sys_getrusage.md#get-resource-usage-getrusage)
        - [The input parameter $mode](content/011_sys_getrusage.md#the-input-parameter-mode)
    - [Return current UNIX timestamp: microtime()](content/012_sys_microtime.md#return-current-unix-timestamp-microtime)
    - [Why you need to avoid to use microtime() to measure the time](content/012_sys_microtime.md#why-you-need-to-avoid-to-use-microtime-to-measure-the-time)
    - [Get monotonic time: hrtime()](content/013_sys_hrtime.md#get-monotonic-time-hrtime)
    - [Get temporary directory: sys_get_temp_dir()](content/014_sys_sys_get_temp_dir.md#get-temporary-directory-sys_get_temp_dir)
    - [Get temp file name: tempnam()](content/015_sys_tempnam.md#get-temp-file-name-tempnam)
- Array
    - [Apply function to each array element: array_map()](content/101_arr_array_map.md#apply-function-to-each-array-element-array_map)
    - [A string from an array:  join()](content/102_arr_join.md#a-string-from-an-array--join)
    - [Check if a key exists in the array:  key_exists()](content/103_arr_key_exists.md#check-if-a-key-exists-in-the-array--key_exists)
    - [Check if an element is included in the array:  in_array()](content/104_arr_in_array.md#check-if-an-element-is-included-in-the-array--in_array)
        - [Strict comparison](content/104_arr_in_array.md#strict-comparison)
        - [Case Sensitive](content/104_arr_in_array.md#case-sensitive)
    - [Merge two arrays: array_merge()](content/105_arr_array_merge.md#merge-two-arrays-array_merge)
        - [Key collision: array merge of arrays with numeric keys](content/105_arr_array_merge.md#key-collision-array-merge-of-arrays-with-numeric-keys)
        - [Key collision: array merge of arrays with string keys](content/105_arr_array_merge.md#key-collision-array-merge-of-arrays-with-string-keys)
    - [Generate and fill a new array: range()](content/106_arr_range.md#generate-and-fill-a-new-array-range)
        - [Step](content/106_arr_range.md#step)
    - [Creating array from variables: compact()](content/107_arr_compact.md#creating-array-from-variables-compact)
- Variables, Constants
    - [Get variable type: gettype()](content/201_var_gettype.md#get-variable-type-gettype)
    - [Portable directory separator: DIRECTORY_SEPARATOR](content/202_var_directory_separator.md#portable-directory-separator-directory_separator)
    - [Portable end of line: PHP_EOL](content/203_var_php_eol.md#portable-end-of-line-php_eol)
    - [Export object properties as array: get_object_vars()](content/204_var_get_object_vars.md#export-object-properties-as-array-get_object_vars)
- Functions
    - [Anonymous functions](content/301_fns_anonymous.md#anonymous-functions)
        - [An example with a PHP core function](content/301_fns_anonymous.md#an-example-with-a-php-core-function)
    - [Arrow Functions with PHP](content/302_fns_arrowfunction.md#arrow-functions-with-php)
- Strings
    - [Padding strings: str_pad()](content/401_str_str_pad.md#padding-strings-str_pad)
    - [Converting case of a sentences of strings: mb_convert_case()](content/402_str_mb_convert_case.md#converting-case-of-a-sentences-of-strings-mb_convert_case)
    - [Parse string: sscanf()](content/403_str_sscanf.md#parse-string-sscanf)
    - [Format a string: sprintf()](content/404_str_sprintf.md#format-a-string-sprintf)
        - [Padding](content/404_str_sprintf.md#padding)
        - [Numbers (integers)](content/404_str_sprintf.md#numbers-integers)
        - [Numbers (floats)](content/404_str_sprintf.md#numbers-floats)
        - [Formatting cheat sheet](content/404_str_sprintf.md#formatting-cheat-sheet)
    - [Validating string, alphabetics: ctype_alpha()](content/405_str_ctype_alpha.md#validating-string-alphabetics-ctype_alpha)
    - [Validating string, digits: ctype_digit()](content/406_str_ctype_digit.md#validating-string-digits-ctype_digit)
    - [Validate strings, lower case letters: ctype_lower()](content/407_str_ctype_lower.md#validate-strings-lower-case-letters-ctype_lower)
    - [Generate unique string: uniqid()](content/408_str_uniqid.md#generate-unique-string-uniqid)
    - [Store objects or variables: serialize()](content/409_str_serialize.md#store-objects-or-variables-serialize)
    - [Retrieve saved objects or variables: unserialize()](content/410_str_unserialize.md#retrieve-saved-objects-or-variables-unserialize)
    - [Compress content: gzcompress()](content/411_str_gzcompress.md#compress-content-gzcompress)
    - [Uncompress content: gzuncompress()](content/412_str_gzuncompress.md#uncompress-content-gzuncompress)
    - [Delete characters: trim()](content/413_str_trim.md#delete-characters-trim)
    - [From JSON string to PHP object: json_decode()](content/414_str_json_decode.md#from-json-string-to-php-object-json_decode)
        - [Flags](content/414_str_json_decode.md#flags)
        - [Catching errors in parsing](content/414_str_json_decode.md#catching-errors-in-parsing)
        - [Big integers](content/414_str_json_decode.md#big-integers)
        - [More than one flag](content/414_str_json_decode.md#more-than-one-flag)
    - [Format a string with an array: vsprintf()](content/415_str_vsprintf.md#format-a-string-with-an-array-vsprintf)
- Files
    - [File information: stat()](content/501_fil_stat.md#file-information-stat)
        - [Symbolic link information](content/501_fil_stat.md#symbolic-link-information)
    - [Parsing directory: scandir()](content/502_fil_scandir.md#parsing-directory-scandir)
    - [Split filename infos: pathinfo()](content/503_fil_pathinfo.md#split-filename-infos-pathinfo)
    - [Create a directory: mkdir()](content/504_fil_mkdir.md#create-a-directory-mkdir)
        - [Permissions](content/504_fil_mkdir.md#permissions)
        - [Nested directories](content/504_fil_mkdir.md#nested-directories)
    - [The fingerprint of a file: md5_file()](content/505_fil_md5_file.md#the-fingerprint-of-a-file-md5_file)
    - [Find files that match a pattern: glob()](content/506_fil_glob.md#find-files-that-match-a-pattern-glob)
    - [Read dir: readdir()](content/507_fil_readdir.md#read-dir-readdir)
- Appendix
    - [Cheat sheet for PHP array functions](content/900_ext_array.md#cheat-sheet-for-php-array-functions)
        - [Append arrays](content/900_ext_array.md#append-arrays)
        - [Joins elements into string](content/900_ext_array.md#joins-elements-into-string)
        - [A section of an array](content/900_ext_array.md#a-section-of-an-array)
        - [Find the first occurrence](content/900_ext_array.md#find-the-first-occurrence)
        - [Find the last occurrence](content/900_ext_array.md#find-the-last-occurrence)
        - [A function for each element](content/900_ext_array.md#a-function-for-each-element)
        - [All elements match an expression](content/900_ext_array.md#all-elements-match-an-expression)
        - [At least 1 element matches an expression](content/900_ext_array.md#at-least-1-element-matches-an-expression)
        - [Filter elements](content/900_ext_array.md#filter-elements)
        - [Apply a function for each element](content/900_ext_array.md#apply-a-function-for-each-element)
        - [Flatten array](content/900_ext_array.md#flatten-array)
        - [Change some elements](content/900_ext_array.md#change-some-elements)
        - [Apply a function with all elements](content/900_ext_array.md#apply-a-function-with-all-elements)
        - [Last element](content/900_ext_array.md#last-element)
        - [Prepends an element](content/900_ext_array.md#prepends-an-element)
        - [Add element at the end](content/900_ext_array.md#add-element-at-the-end)
        - [Reverse an array](content/900_ext_array.md#reverse-an-array)
        - [Sorting](content/900_ext_array.md#sorting)
        - [Remove/replacing/adding elements](content/900_ext_array.md#removereplacingadding-elements)
        - [Stringify and array](content/900_ext_array.md#stringify-and-array)
        - [Length](content/900_ext_array.md#length)
        - [Is array?](content/900_ext_array.md#is-array)
