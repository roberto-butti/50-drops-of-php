## Retrieve the current Process Identifier: getmypid()

Any active process is identified by operating system by a Process IDentifier (PID).
This number may be used to kill or manage the process.
In the _shell_, to retrieve the list of processes with the PID, you can use the _ps_ command.

In a PHP script you can retrieve the current process identifier with _getmypid()_.

It returns an integer of the identifier or _false_ if an error occours.

```php

$myPid = getmypid(); // for example 19740
echo "If you want to kill me, execute: kill -9 " . $myPid;
sleep(100000);
```
