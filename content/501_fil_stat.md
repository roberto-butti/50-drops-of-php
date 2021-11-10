# Files

## File information: stat()




### Symbolyc link informations

A symbolic link is a special file that just link to another real file.

If you use *stat()* function on a symbolic link file, you will obtain information of the target file (the file linked by the symbolic link). Instead, if you want to obtain information about the symbolic link is to use *lstat()* function.



