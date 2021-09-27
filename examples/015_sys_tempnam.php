<?php
$extension = "txt";
$tmpFilename = tempnam(sys_get_temp_dir(), "MY-");
if ($tmpFilename) {
    $tmpFilename.= "." . $extension;
}
echo $tmpFilename . PHP_EOL;
