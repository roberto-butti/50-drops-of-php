## Shutdown function: register_shutdown_function()
Suppose you have the _exit()_ function called in multiple points.
If you want to detect the shutdown triggered by _exit()_ call, you can "register" your function that you want to call once _exit()_ is executed.

```php
register_shutdown_function(function () {
    echo 'Shutting down.', PHP_EOL;
});

exit("Good bye!");
```
