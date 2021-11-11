<?php

// create a directory
$return = mkdir("./testdir", 0777);
var_dump($return);

// create a directory considering the umask
$old = umask(0);
var_dump($old);
$return = mkdir("./testdir", 0777);
var_dump($return);
umask($old);

// create nested directories
$return = mkdir("./testdir/testdir1/testdir2/testdir3", 0777, true);
var_dump($return);
umask($old);
