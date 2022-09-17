# How to contribute

The goal is to build a opensource book about PHP functions for new users in the PHP ecosystem.
This book collects 50 useful, unknown, underrated PHP functions or stuff discovered, used, learned during the PHP daily use.
Using frameworks daily, sometimes the perception of the power of the language and of the basic functionalities provided by the PHP core could be lost. I see that usually I used to look the framework documentation or looking for a package in Packagist for system, array, string functions instead using some core functionalities provided by the language.
The goal is to cover until 100 functions (now we have 50 sections), so the goal is creating 50 new sections, each section covers 1 specific function.

The functions are grouped in topics:

- System
- Array
- Variables and types
- String
- File
- Extra bonus chapter where I'm collecting some nice cheatsheet

Each function is explained with the description, and examples in markdown files in content directory.

## The file name convention
In content directory we have all the markdowns.
The filename has the structure:
- first 3 digits:
  - the first 1 is for the topic, 0 for the system functions, 1 for the arrays function, 2 for var and types, 3 for string function, 4 for file.
  - the second and the third digits : are progressive number for the topic
- 3 chars to identify the topic. 
- The slugify name of the function/section

For example, fo the file **203_var_php_eol.md** :
- 2: (the first digit) is for var and types function
- 03: is the progress number
- var: the topic
- php_eol: the function explained
- md: the extension


## Submit ideas or feature requests

* Take a look if your request is already there https://github.com/roberto-butti/50-drops-of-php/issues
* If it is not present, you can create a new one https://github.com/roberto-butti/50-drops-of-php/issues/new

## Submit your changes

If you want to submit a pull request, please send a [GitHub Pull Request to 50 drops of PHP](https://github.com/roberto-butti/50-drops-of-php/pull/new/main) with a clear list of what you've done (read more about [pull requests](https://help.github.com/articles/about-pull-requests)).


Please use "main" branch for pull request.
