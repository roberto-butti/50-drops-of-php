## Loaded PHP modules: get_loaded_extensions()

The execution of the PHP scripts could use core  PHP functionalities and/or functionalities provided by modules.
For example, modules are:

- *bcmath*: arbitrary precision mathematics which supports numbers represented as strings;
- *ctype*: it provides functions for checking character string, for example if a char is numeric or alphabetic or alphanumeric etc...
- *fileinfo*: it provides functions for detecting the mime type and the encoding of a file;
- _JSON_: it provides a parser for JSON files;
- _Mbstring_: it provides multibyte string functions;
- _OpenSSL_: it provides functions for encryption and decryption;
- _PDO_: it provides functions for accessing databases;
- _Tokenizer_: it provides functions for parsing text and extract PHP tokens;
- _XML_: it provides functions for parsing XML files.

The availability of these modules, it depends how the PHP engine was compiled and the configuration of the PHP installation (php.ini).

To know which modules are available, _get_loaded_extensions()_ function exists.
It returns and array with the names of the name of the modules:
```php
$extensions = get_loaded_extensions();
foreach ($extensions as $key => $extension) {
    echo $extension . PHP_EOL;
}
```
To obtain only Zend extensions, set _true_ as parameter. For example you could obtain something like _Xdebug_ and _Zend OPcache_:

```php
$extensions = get_loaded_extensions(true);

foreach ($extensions as $key => $extension) {
    echo $extension . PHP_EOL;
}
```






