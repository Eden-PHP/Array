[![Build Status](https://api.travis-ci.org/Eden-PHP/Array.png)](https://travis-ci.org/Eden/Array)
===
#DEVELOPMENT MODE

```
The following package is in review to be included in Eden v4. This package is not ready for production. Please wait for build badges before attempting to use this package.
```

![logo](http://eden.openovate.com/assets/images/cloud-social.png) Eden Array
====

- [Install](#install)
- [Introduction](#intro)
- [API](#api)
- [Contributing](#contributing)

====

<a name="install"></a>
## Install

`composer install eden/array`

====

<a name="intro"></a>
## Introduction

Chainable array methods. When using multiple PHP array functions in one line, it makes code harder to read. This is because a programmer needs to be trained to read code from inner to outer, rather than traditionally left to right (unless you live in Japan). Eden's data typing are objects that correct this readability problem.


```
array_keys(array_reverse(array_flip(array(4, 5, 6)))); // [6, 5, 4]
```

The above demonstrates that we must read this as `array_flip()`, then `array_reverse()`, followed by `array_keys()` which is inner function first going outwards. The example below shows how using types makes this line easier to read.

```
echo eden('array')->set(4, 5, 6)->array_flip()->array_reverse()->array_keys(); //--> [6, 5, 4]
```

When echoed the array object will automatically convert to a readable json. Eden covers most of the array functions provided by PHP. Below is a list of string methods you can linearly perform.

```
echo eden('array')
	->set(4, 5, 6)
	->array_flip()
	->array_reverse()
	->array_keys(); //--> [6, 5, 4]
```

Expressed vertically as above shows something more pleasing to a developer. Array objects, 
for the most part, can also be treated as regular arrays as implied below.

```
//instantiate
$array = eden('array')->set(1, 2, 3);

//push in a new value
$array[] = 4;
 
echo $array[1];  //--> 2
 
foreach($array as $key => $value) {} //loop through array
```

====

<a name="api"></a>
## API

====

### array_change_key_case

Same as PHP: array_change_key_case

#### Usage

```
eden('array')->array_change_key_case([int $case = CASE_LOWER]);
```

#### Example

```
eden('array')
	->set(array('a' => 1))
	->array_change_key_case(CASE_UPPER);
```

====

### array_chunk

Same as PHP: array_chunk

#### Usage

```
eden('array')->array_chunk(int $size[, bool $preserve_keys = false]);
```

#### Example

```
eden('array')
	->set(1, 2, 3, 4)
	->array_change_key_case(2);
```

====

### array_combine

Same as PHP: array_combine

#### Usage

```
eden('array')->array_combine([array $keys, ]array $values);
```

#### Example

*Example 1*

```
eden('array')
	->set('a', 'b', 'c')
	->array_combine(array(4, 5, 6));
```

*Example 2*

```
eden('array')->array_combine(array('a', 'b', 'c'), array(4, 5, 6));
```

====

### array_countdatas

Same as PHP: array_countdatas

#### Usage

```
eden('array')->array_countdatas(TODO);
```

#### Example

```
eden('array')->array_countdatas(TODO);
```

====

### array_diff_assoc

Same as PHP: array_diff_assoc

#### Usage

```
eden('array')->array_diff_assoc(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_diff_assoc(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_diff_assoc(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_diff_key

Same as PHP: array_diff_key

#### Usage

```
eden('array')->array_diff_key(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_diff_key(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_diff_key(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_diff_uassoc

Same as PHP: array_diff_uassoc

#### Usage

```
eden('array')->array_diff_uassoc(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_diff_uassoc(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_diff_uassoc(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_diff_ukey

Same as PHP: array_diff_ukey

#### Usage

```
eden('array')->array_diff_ukey(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_diff_ukey(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_diff_ukey(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_diff

Same as PHP: array_diff

#### Usage

```
eden('array')->array_diff(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_diff(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_diff(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_fill_keys

Same as PHP: array_fill_keys

#### Usage

```
eden('array')->array_fill_keys([array $keys, ]array $values);
```

#### Example

*Example 1*

```
eden('array')
	->set('a', 'b', 'c')
	->array_fill_keys(array(4, 5, 6));
```

*Example 2*

```
eden('array')->array_fill_keys(array('a', 'b', 'c'), array(4, 5, 6));
```

====

### array_filter

Same as PHP: array_filter

#### Usage

```
eden('array')->array_filter(callable $callback);
```

#### Example

```
eden('array')
	->set('a', 'b', 'c')
	->array_filter(function() {
		//filter process
	});
```

====

### array_flip

Same as PHP: array_flip

#### Usage

```
eden('array')->array_flip();
```

#### Example

```
eden('array')->set('a', 'b', 'c')->array_flip();
```

====

### array_intersect_assoc

Same as PHP: array_intersect_assoc

#### Usage

```
eden('array')->array_intersect_assoc(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_intersect_assoc(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_intersect_assoc(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_intersect_key

Same as PHP: array_intersect_key

#### Usage

```
eden('array')->array_intersect_key(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_intersect_key(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_intersect_key(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_intersect_uassoc

Same as PHP: array_intersect_uassoc

#### Usage

```
eden('array')->array_intersect_uassoc(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_intersect_uassoc(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_intersect_uassoc(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_intersect_ukey

Same as PHP: array_intersect_ukey

#### Usage

```
eden('array')->array_intersect_ukey(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_intersect_ukey(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_intersect_ukey(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

### array_intersect

Same as PHP: array_intersect

#### Usage

```
eden('array')->array_intersect(array $array[, array $array2..]);
```

#### Example

*Example 1*

```
eden('array')
	->set(array('a' => 1, 'b' => 2))
	->array_intersect(array('c' => 3, 'b' => 2));
```

*Example 2*

```
eden('array')->array_intersect(array('a' => 1, 'b' => 2), array('c' => 3, 'b' => 2));
```

====

<a name="contributing"></a>
#Contributing to Eden

Contributions to *Eden* are following the Github work flow. Please read up before contributing.

##Setting up your machine with the Eden repository and your fork

1. Fork the repository
2. Fire up your local terminal create a new branch from the `v4` branch of your 
fork with a branch name describing what your changes are. 
 Possible branch name types:
    - bugfix
    - feature
    - improvement
3. Make your changes. Always make sure to sign-off (-s) on all commits made (git commit -s -m "Commit message")

##Making pull requests

1. Please ensure to run `phpunit` before making a pull request.
2. Push your code to your remote forked version.
3. Go back to your forked version on GitHub and submit a pull request.
4. An Eden developer will review your code and merge it in when it has been classified as suitable.