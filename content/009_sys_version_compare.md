## Compare versions: version_compare()

The PHP versioning system follows a scheme named _SemVer_. The version identifier is a string with 3 numbers. Every time a new version of PHP is released, the version identifier is increased. The version identifier is something like: MAJOR.MINOR.PATCH. Once a new release is created, the version is incremented following these rules:

- MAJOR version, incremented when incompatible API changes happens;
- MINOR version, incremented when there are changes to functionality in a backwards compatible manner;
- PATCH version, incremented when there are backwards compatible bug fixes.

For example the version 8.0.10 of PHP has 8 as MAJOR, 0 as MINOR and 10 as PATCH.

Sometimes it is useful to compare two versions.

For example, if you want to detect if the current version is greater or equal than "8.0.0" you can use the _version_compare()_ function. With the _phpversion()_ function, you can obtain the current version and with _version_compare()_ you can compare it with a specific PHP version (for example with "8.0.0").

The function _version_compare()_ has 3 parameters. The first 2 parameters (mandatory) are the versions to compare. The third parameter (optional) is the operator to use for comparison. Operators could be <, lt, <=, le, >, gt, >=, ge, ==, =, eq, !=, <>, ne.

### Comparing without operator

Calling _version_compare()_ with 2 parameters returns a number. It returns:

- 1 if the second parameter is greater (newer) than the first one;
- 0 if both parameters are equals;
- -1 if the second parameters is smaller (older) than the first one.

```php
$version = phpversion();
echo $version . PHP_EOL;

$min_version = "8.0.0";

if (version_compare($version, $min_version) > 0) {
    echo "NEWER!   You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
} elseif (version_compare($version, $min_version) < 0) {
        echo "OLDER!  You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
} else { // version_compare is 0
    echo "EQUALS!  You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
}
```



### Comparing with operator

Calling _version_compare()_ with 3 parameters (version, version and operator) returns a boolean. The third parameter is the operator. The operators allowed are the following strings:

- _<_ or _lt_: less than;
- _<=_ or _le_: less than or equals;
- _>_, _gt_: greater than;
- _>=_, _ge_: greater or equals than;
- _==_, _eq_: equals;
- _!=_, _<>_, _ne_: not equals.

```php
$version = phpversion();
echo $version . PHP_EOL;

$min_version = "8.0.0";
if (version_compare($version, $min_version, "ge")) {
    echo "OK!   You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
} else {
    echo "OPS!  You have PHP ${version}. Minimum version is ${min_version}" . PHP_EOL;
}
```
