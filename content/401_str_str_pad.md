# Strings

## Padding strings: str_pad()
 With *str_pad()* function you can pad (fill with some characters) a string.

To pad a string with spaces until it reaches the lenght of ten chars:

```php
echo str_pad("Hello", 10) . "-";
// Hello     -
```

The default is to pad with spaces " " and on the right of the original string.

If you need to change the default behaviour oyu have the third parameter to define the char for padding

```php
echo str_pad("Hello", 10, "+");
// Hello+++++
```

You can also define more chars for padding:

```php
echo str_pad("Hello", 10, "+*");
// Hello+*+*+
```

Yuo can define the "direction" of the pad with STR_PAD_RIGHT (the default), STR_PAD_LEFT, STR_PAD_BOTH:

```php
echo str_pad("Hello", 10, "+", STR_PAD_BOTH);
// ++Hello+++
```



