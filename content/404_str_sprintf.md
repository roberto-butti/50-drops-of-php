## Format a string: sprintf()
 The *sprintf()* function is useful when you want to generate a string with a kind of template.

```php
$template = "Hi %s, how are you?";
$name = "John";
echo sprintf($template, $name) . PHP_EOL;
```

The *%s* is a placeholder for string. It means, in this position, with this format, I would like to replace the placeholder with a value.

In the same way, you can use numbers *%d*:

```php
$name = 'John';
$age = 25;
$string = sprintf('Hi %s, you are %d years old.', $name, $age);
echo $string . PHP_EOL;
```

As you can see, the order of the parameters *$name* and *$age* is very important. If you want to use a placeholder defining the number position of the parameters or reuse a parameter:

```php
$name = 'John';
$age = 25;
$string = sprintf('Hi %s, you are %d years old. Goodbye my friend %1$s', $name, $age);
echo $string . PHP_EOL;
```

In this case the *1$* means "take the first parameter". The first parameter is *$name* (the second one in the example is *$age*). The result will be:

- Hi **John**, you are **25** years old. Good bye my friend **John**

### Padding

If you need to pad a placeholder, you can define how many characters in total the replaced value needs to be long.

For example if you want to align some replace values, you can use*%10s*. This is a placeholder for a string variable that will be padded until it will be 10 chars long:

```php
$name = 'John';
$age = 25;
echo sprintf('%10s: %s', "Name", $name) . PHP_EOL;
echo sprintf('%10s: %d', "Age", $age) . PHP_EOL;
```

You can also define the character for padding. If you want to use underscore for padding, you need to use *'_* (single quote and the character needed).

By default, the pad characters are added before the string. So %10s of the string "something" (9 chars long) will prepend just 1 space before the string.
For left alignment, use dash char before the number of chars:
```php
echo sprintf('*%-25s*', "Left with spaces") . PHP_EOL;
/*
The result will be:
*Left with spaces         *
*/
```
So with alignment and pad character definition:
```php
// Setting padding char (underscore) with single quote after % char
echo sprintf("*%'_25s*", "Right with underscores") . PHP_EOL;
// setting padding chat + alignment left
echo sprintf("*%'_-25s*", "Left with underscores") . PHP_EOL;
/*
*___Right with underscores*
*Left with underscores____*
*/
```

If your result string it is longer than the number of total padding characters, it will be not truncate by default.

For example with the string "Something", if you are using %2s, the padding will be ignored.

If you want to force and truncate the result string, you can use the dot notation:

```php
echo sprintf("*%2s*", "Something") . PHP_EOL;
/*
*Something*
*/
echo sprintf("*%2.2s*", "Something") . PHP_EOL;
/*
*So*
*/
```

### Numbers (integers)

Like the strings, you can format numbers, like integer, float, decimals etc.
For formatting integers, you can use *%d*:

```php
echo sprintf("*%d*", 512) . PHP_EOL; // *512*
```
Align right with spaces:
```php
echo sprintf("*%8d*", 512) . PHP_EOL; // *     512*
```
Align right with a custom padding char, for example with 0s:
```php
echo sprintf("*%'08d*", 512) . PHP_EOL; // *00000512*
```
If the padding values it is lower than total amount of chars, it is ignored:
```php
echo sprintf("*%2d*", 512) . PHP_EOL; // *512*
```
Align left with spaces:
```php
echo sprintf("*%-8d*", 512) . PHP_EOL; // *512     *
```
Take the second parameter with 2$
```php
echo sprintf('*%2$d*', 512 , 1024) . PHP_EOL; // *1024*
```

### Numbers (floats)

If you are working with floats, probably you want also to control the number of decimal digits.
Floats with decimals (6 decimal digits by default):
```php
echo sprintf('*%f*', 1.25) . PHP_EOL; // *1.250000*
```
Floats with 3 decimals:
```php
echo sprintf("*%5.3f*", 1.25) . PHP_EOL; // *1.250*
```
Floats rounded to 3 decimals:
```php
echo sprintf("*%5.3f*", 1.2519) . PHP_EOL; // *1.252*
```
And using padding directives, floats rounded to 3 decimals prefixed with 0 for reaching 10 digits:
```php
echo sprintf("*%'010.3f*", 1.2519) . PHP_EOL; // *000001.252*
```




### Formatting cheat sheet


| What                                                         | Char   | Placeholder |
| ------------------------------------------------------------ | ------ | ----------- |
| A string                                                     |        | %s          |
| A string padded with 10 chars                                | 10     | %10s        |
| A string padded with 10 underscore chars                     | '_     | %'_10s      |
| A string padded with 10 underscore chars (left alignment)    | -      | %'_-10s     |
| A long string padded, and truncated if is longer             | .      | %2.2s       |
| Integer                                                      |        | %d          |
| Integer with padding                                         | 8      | %8d         |
| Integer aligned left with spaces                             | -      | %-8d        |
| Integer aligned left with a custom char                      | '0     | %'08d       |
| Float with decimals                                          |        | %f          |
| Float with 3 decimals with 5 digits in total (counting also decimal separator) | 5.3    | %5.3f       |
| Float with 3 decimals prefixed with 0 for reaching 10 digits | '010.3 | %'010.3f    |

