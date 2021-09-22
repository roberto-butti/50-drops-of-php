## Get resources usage: getrusage()

The function _getrusage()_ returns resource usage statistics for the calling process, which is the sum of resources used by all threads in the process.
The parameter $mode is optional. If you call _getrusage()_ with no parameters, it returns resource usage statistics for the calling process, if you call it with _1_ as parameter, _getrusage(1)_, (RUSAGE_CHILDREN) it returns resource usage statistics for all children of the calling process that have terminated and been waited for.

It returns an associative array with "resource name" => "value".

The resources are:

- _ru_utime_: user CPU time used, this is the total amount of time spent executing in user mode, expressed in a timeval structure, *tv_sec* (seconds) and *tv_usec* (microseconds);
- _ru_stime_: system CPU time used, total amount of time spent executing in kernel mode, expressed in a timeval structure, *tv_sec* (seconds) and *tv_usec* (microseconds);
- *ru_maxrss*: maximum resident set size, the maximum resident set size used (in kilobytes), with $mode=1, is the resident set size of the largest child;
- *ru_minflt*: page reclaims (soft page faults), number of page faults serviced without any I/O activity;
- *ru_majflt*: page faults (hard page faults), number of page faults serviced that required I/O activity;
- *ru_inblock*: block input operations, number of times the file system had to perform input;
- *ru_oublock*: block output operations, number of times the file system had to perform output;
- *ru_nvcsw*: voluntary context switches, number of times a context switch resulted due to a process voluntarily giving up the processor before its time slice was completed (usually to await availability of a resource);
- *ru_nivcsw*: involuntary context switches, number of times a context switch resulted due to a higher priority process becoming runnable or because the current process exceeded its time slice.


```php
$resources = getrusage();
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

### The input parameter $mode
If you call *getrusage()* with *1* as input parameter, it is shown the resource usege of children processes.
If you call *getrusage(1)* and the process has no child, all values will be 0:
```php
// $mode 1
$resources = getrusage(1);
foreach ($resources as $key => $value) {
    echo "=> " . $key . ": " . $value . PHP_EOL;
}
```
If you call *getrusage(1)* after having lanched a processes, you will see the resources used by the child process.
In the example *exec('sleep 1')* it simulates the process creation.
```php
// $mode 1 after executing an external process
exec('sleep 1');
$resources = getrusage(1);
foreach ($resources as $key => $value) {
    echo "=> " . $key . ": " . $value . PHP_EOL;
}
```
