## Get resources usage: getrusage()

The function _getrusage()_ returns resource usage statistics for the calling process, which is the sum of resources used by all threads in the process.
The parameter $mode is optional. If you call _getrusage()_ with no parameters, it returns resource usage statistics for the calling process, if you call it with _1_ as parameter, _getrusage(1)_, (RUSAGE_CHILDREN) it returns resource usage statistics for all children of the calling process that have terminated and been waited for.

It returns an associative array with "resource name" => "value".

The resources are:

- _ru_utime_: user CPU time used, this is the total amount of time spent executing in user mode, expressed in a timeval structure, *tv_sec* (seconds) and *tv_usec* (microseconds);
- _ru_stime_: system CPU time used, total amount of time spent executing in kernel mode, expressed in a timeval structure, *tv_sec* (seconds) and *tv_usec* (microseconds);


```php
const RUSAGE_SELF = 0;
const RUSAGE_CHILDREN = -1;
const RUSAGE_THREAD = 1;

$resources = getrusage(RUSAGE_SELF);

foreach ($resources as $key => $value) {
    echo "=> " . $key . ": " . $value . PHP_EOL;
}

/*
The execution shows:
=> ru_oublock: 0
=> ru_inblock: 0
=> ru_msgsnd: 0
=> ru_msgrcv: 0
=> ru_maxrss: 12034048
=> ru_ixrss: 0
=> ru_idrss: 0
=> ru_minflt: 3151
=> ru_majflt: 0
=> ru_nsignals: 0
=> ru_nvcsw: 1
=> ru_nivcsw: 194
=> ru_nswap: 0
=> ru_utime.tv_usec: 26337
=> ru_utime.tv_sec: 0
=> ru_stime.tv_usec: 33557
=> ru_stime.tv_sec: 0
*/
```
