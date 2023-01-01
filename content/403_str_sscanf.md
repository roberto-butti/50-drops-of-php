## Parse string: sscanf()
 With *sscanf()* function you can parse a string following a well known pattern.

For example ISBN code , is the code identifier for books.

It is 13 chars long and it is defined as:

- first 3 digits are the Ean code;
- then a separator with -;
- 1 digit for group;
- then a separator with -;
- 3 digits for publisher;
- then a separator with -;
- 5 digits for the title;
- then a separator with -;
- 1 digit for check.

An example is : "978-0-596-52068-7"

The function *sscanf()* has at least 2 parameters:

- first one is the string to parse ("978-0-596-52068-7")
- second one is the pattern, composed with some placeholders. For example with %d you can decalre a digit. In the case of isbn you can specify: "%d-%d-%d-%d-%d" that it means : a number followed by - char, another number followed by - char, another number followed by - char, another number followed by - char, another number followed by - char.

```php
$isbn = "978-0-596-52068-7";
list($ean, $group, $publisher, $title, $check_digit) =
    sscanf($isbn, "%d-%d-%d-%d-%d");
echo "EAN: " . $ean . PHP_EOL;
echo "Group: " . $group . PHP_EOL;
echo "Publisher: " . $publisher . PHP_EOL;
echo "Title: " . $title . PHP_EOL;
echo "Check digit: " . $check_digit . PHP_EOL;
```
