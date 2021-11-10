# Files

## File information: stat()
With *stat()* you can retrieve information and statistics about a file.

The parameter is the filename and it returns an associative array with some information:

- dev: device number
- ino: inode number
- mode: contains information read by several functions. When written in octal, starting from the right, the first three digits are returned by chmod(). The next digit is ignored by PHP. The next two digits indicate the file type
- nlink: number of links
- uid, gid: userid and groupid
- rdev: device type
- size: size in *bytes*
- atime: last access time (unix timestamp)
- mtime: last modification time (unix timestamp)
- ctime: last inode change (unix timestamp)
- blksize: blocksize
- blocks: number of blocks allocated

I use a lot, mode, uid, gid, size and mtime.

```php
    $filestat = stat($filename);
    var_dump(sprintf("%'07o",$filestat['mode']));
// 0100644
```

If you have mode values in octal format you will have 7 characters.

- the first one is 0
- the second and third one is the file type
- the fourth one is 0
- the fifth, sixth and seventh are file permission

For the file type:

- 0140xxx: socket
- 0120xxx: link
- 0100xxx: regular file
- 0060xxx: block file
- 0040xxx: directory
- 0020xxx: character device
- 0010xxx: fifo

To retrieve only the bytes for the file type you can use a bitmask, something like: $filestat['mode'] & 0xF000

```php
$filestat = stat($filename);
var_dump(sprintf("%'07o",$filestat['mode'] & 0xF000));
```

I have an anonymous function to retrieve the file type in a more descriptive way, using match constructor:

```php
$getinfo = function ($filename) {
    $filestat = stat($filename);
    var_dump(sprintf("%'07o",$filestat['mode'] & 0xF000));
    return match ($filestat['mode'] & 0xF000) {
        0xC000 => 'socket',
        0xA000 => 'symbolic link',
        0x8000 => 'regular',
        0x6000 => 'block special',
        0x4000 => 'directory',
        0x2000 => 'character special',
        0x1000 => 'fifo pipe',
        default => 'unknown file',
    };
};

echo $getinfo(__FILE__) . PHP_EOL;
echo $getinfo(__DIR__) . PHP_EOL;
```

### Symbolic link information

A symbolic link is a special file that just link to another real file.

If you use *stat()* function on a symbolic link file, you will obtain information of the target file (the file linked by the symbolic link). Instead, if you want to obtain information about the symbolic link is to use *lstat()* function.

```php
$filestat = lstat($filename);
var_dump(sprintf("%'07o",$filestat['mode'] & 0xF000));
```





