## How to exit: exit()

If you are running a script and want to stop execution and return to the shell the right way, you should use the _exit()_ function.

Why?
- with _exit()_ you can specify the exit status code. Status 0 means "everything is fine", Status > 0 means something went wrong with the execution;
- with _exit()_ it is possible to specify a string, printed at the end of the execution;
- with _exit()_ a callback is automatically executed, defined with *register_shutdown_function()*.


### Exit parameter
```php
exit(0); // exit and returns 0 exit code, everything is ok;
exit(1); // exit and returns 1 exit code, something went wrong;
exit("Good bye") // exit, returns 0 and it displays "Good bye"
```



The exit code is a convention to communicate the exit status of your execution to the shell that started executing the script.
For example, in your shell environment you can detect the exit code via _$?_ shell variable.

```sh
php -r 'exit(1);'
if [[ $? -ne 0 ]] ; then ; echo "there was an error executing your php script"; fi
```
