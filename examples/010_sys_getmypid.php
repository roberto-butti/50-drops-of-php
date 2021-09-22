<?php

$myPid = getmypid();
echo "If you want to kill me, execute: kill -9 " . $myPid;
sleep(100000);
