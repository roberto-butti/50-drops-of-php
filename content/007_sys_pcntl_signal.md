## Listening signals: pcntl_signal()

One of the methods used by to operating system to communicate with the running processes is through _signals_.
The operating system uses _signals_ to communicate to the processes something like: "I want to stop your execution."
For example, if the user want to stop the execution of the process, he can use _shell_ command "_kill_" or pressing _CTRL+C_. With _kill_ command executed from the _shell_ or _CTRL+C_ pressed during the execution of the process, the operating system send a signal to the target process.

If in a PHP script you want to detect when the script receive a signal, you can use *pcntl_signal()* function.
The first argument is the signal you want to detect.
The _kill_ command, and _CTRL+C_ send both a _SIGINT_ signal.
The second argument is the custom function to be executed, when the script receive the signal.

>{quote} In order to make pcntl_signal work in the right way, use *declare(ticks=1);*

```php
declare(ticks=1);
echo "Installing signal handler...\n";
/**
 * listening SIGINT signal.
 * SIGINT is triggered by:
 * - kill command
 * - CTRL + C keys
 */
pcntl_signal(
    SIGINT,
    function ($signal) {
        echo "Hi, you sent SIGINT, -" . $signal . "-" . PHP_EOL;
    }
);
sleep(100);
echo "This is the end" . PHP_EOL;
```
