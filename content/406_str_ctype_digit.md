## Validating string, digits: ctype_digit()
When you need to validate a string that contains digits, the function *ctype_digit()* returns true if the input string contains only digits:

```php
ctype_digit("123456789"); // true
ctype_digit("1234 A 56789"); // false
```

