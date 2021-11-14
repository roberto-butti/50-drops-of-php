## Loaded PHP modules: get_loaded_extensions()

The execution of the PHP scripts could use core PHP functionalities and/or functionalities provided by modules.
For example, modules are:

- *bcmath*: arbitrary precision mathematics which supports numbers represented as strings;
- *ctype*: provides functions for checking character string, for example if a character is numeric or alphabetic or alphanumeric etc...
- *fileinfo*: provides functions for detecting the mime type and the encoding of a file;
- _JSON_: provides a parser for JSON files;
- _Mbstring_: provides multibyte string functions;
- _OpenSSL_: provides functions for encryption and decryption;
- _PDO_: provides functions for accessing databases;
- _Tokenizer_: provides functions for parsing text and extracting PHP tokens;
- _XML_: provides functions for parsing XML files.

The availability of these modules depend on how the PHP engine was compiled and the configuration of the PHP installation (php.ini).

To know which modules are available, the _get_loaded_extensions()_ function exists.
It returns and array with the names of the modules:
```php
$extensions = get_loaded_extensions();
foreach ($extensions as $key => $extension) {
    echo $extension . PHP_EOL;
}
```
To obtain only Zend extensions, set _true_ as a parameter. For example, you could obtain something like _Xdebug_ and _Zend OPcache_:

```php
$extensions = get_loaded_extensions(true);

foreach ($extensions as $key => $extension) {
    echo $extension . PHP_EOL;
}
```
