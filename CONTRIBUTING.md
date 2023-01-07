# How to contribute

The goal is to build an open-source book about PHP functions for new users in the PHP ecosystem.
This book collects 50 useful, unknown, underrated PHP functions or stuff discovered, used, and learned during PHP's daily use.
Using frameworks daily, sometimes the perception of the power of the language and the basic functionalities provided by the PHP core could be lost. I see that usually, I used to look at the framework documentation or look for a package in Packagist for the system, array, and string functions instead of using some core functionalities provided by the language.
The goal is to cover 100 functions (now we have 50 sections), so the goal is to create 50 new sections, and each section covers 1 specific function.

The functions are grouped into topics:

- System
- Array
- Variables and types
- String
- File
- Extra bonus chapter where I'm collecting some nice cheatsheet

Each function is explained with the description, and examples in markdown files in the `content` directory.

## The file name convention
In the `content` directory, we have all the Markdown files.
The filename has the structure:
- first 3 digits:
  - the first 1 is for the topic, 0 for the system functions, 1 for the arrays function, 2 for var and types, 3 for string function, and 4 for file.
  - the second and the third digits: are progressive numbers for the topic
- 3 chars to identify the topic.
- The "slugified" name of the function/section

For example, for the file **203_var_php_eol.md** :
- `2`: (the first digit) is for var and types function
- `03`: is the progress number
- `var`: the topic
- `php_eol`: the function explained
- `md`: the extension


## Submit ideas or feature requests

* Take a look if your request is already there https://github.com/roberto-butti/50-drops-of-php/issues
* If it is not present, you can create a new one https://github.com/roberto-butti/50-drops-of-php/issues/new

## Submit your changes

If you want to submit a pull request, please send a [GitHub Pull Request to 50 drops of PHP](https://github.com/roberto-butti/50-drops-of-php/pull/new/main) with a clear list of what you've done (read more about [pull requests](https://help.github.com/articles/about-pull-requests)).


Please use "main" branch for pull request.
