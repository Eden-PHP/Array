#DEVELOPMENT MODE

```
The following package is in review to be included in Eden v4. This package is not ready for production. Please wait for build badges before attempting to use this package.
```

# Array

When using multiple PHP string or array functions in one line, it makes code harder to read. This is because a programmer needs to be trained to read code from inner to outer, rather than traditionally left to right (unless you live in Japan). Eden's data typing are objects that correct this readability problem.

**Figure 1. Inner to Outer**

	echo substr(strtolower(str_replace(' ', '-', 'Hello World')), 0, 8); //--> hello-wo

`Figure 1` above demonstrates that we must read this as `str_replace()`, then `strtolower()`, followed by `substr()` which is inner function first going outwards. The example below shows how using types makes this line easier to read.

**Figure 2. Left to Right**

	echo eden('string')->set('Hello World')->str_replace(' ','-')->strtolower()->substr(0, 8); //--> hello-wo

`Eden\\Type\\StringType`, when echoed will automatically convert back to a string. Eden covers most of the string and array functions provided by PHP. Below is a list of string methods you can linearly perform.

**Figure 3. Array objects as Arrays**

	$array = eden('array')->set(1, 2, 3);         //instantiate
	 
	$array[] = 4;
	 
	echo $array[1];  //--> 2
	 
	foreach($array as $key => $value) {} //loop through array
	 
	echo $array; // outputs a json version of the array

Below is a list of array methods you can linearly perform.

**Figure 4. Array Methods**

	$array = eden('array', 1, 2, 3);         //instantiate
	 
	$array->isEmpty();                               //returns true if array is empty
	$array->copy('Key1', 'Key2');                    //copies the value of 'Key1' to 'Key2'
	$array->cut(2);                                  //removes index of 2 and reindexes array
	$array->paste('Key1', 'Key3', 'value');          //adds 'Key3' with the value of 'value' after 'Key1'
	 
	//Supported PHP Array Methods
	$array->changeKeyCase();
	$array->chunk();
	$array->combine();
	$array->countDatas();
	$array->diffAssoc();
	$array->diffKey();
	$array->diffUassoc();
	$array->diffUkey();
	$array->diff();
	$array->fillKeys();
	$array->filter();
	$array->flip();
	$array->intersectAssoc();
	$array->intersectKey();
	$array->intersectUassoc();
	$array->intersectUkey();
	$array->intersect();
	$array->keys();
	$array->mergeRecursive();
	$array->merge();
	$array->pad();
	$array->reverse();
	$array->shift();
	$array->slice();
	$array->splice();
	$array->sum();
	$array->udiffAssoc();
	$array->udiffUassoc();
	$array->udiff();
	$array->uintersectAssoc();
	$array->uintersectAassoc();
	$array->uintersect();
	$array->unique();
	$array->datas();
	$array->count();
	$array->current();
	$array->each();
	$array->end();
	$array->extract();
	$array->key();
	$array->next();
	$array->prev();
	$array->sizeof();
	$array->fill();
	$array->map();
	$array->search();
	$array->compact();
	$array->implode(' '); //returns Eden\\Type\\StringType
	$array->in_array();
	$array->unshift();
	$array->walkRecursive();
	$array->walk();
	$array->arsort();
	$array->asort();
	$array->krsort();
	$array->ksort();
	$array->natcasesort();
	$array->natsort();
	$array->reset();
	$array->rsort();
	$array->shuffle();
	$array->sort();
	$array->uasort();
	$array->uksort();
	$array->usort();
	$array->push();

====

#Contibuting to Eden

##Setting up your machine with the Eden repository and your fork

1. Fork the main Eden repository (https://github.com/Eden-PHP/Array)
2. Fire up your local terminal and clone the *MAIN EDEN REPOSITORY* (git clone git://github.com/Eden-PHP/Array.git)
3. Add your *FORKED EDEN REPOSITORY* as a remote (git remote add fork git@github.com:*github_username*/Array.git)

##Making pull requests

1. Before anything, make sure to update the *MAIN EDEN REPOSITORY*. (git checkout master; git pull origin master)
2. If PHP Unit testing is included in this package please make sure to update it and run the test to ensure everything still works (phpunit)
3. Once updated with the latest code, create a new branch with a branch name describing what your changes are (git checkout -b bugfix/fix-twitter-auth)
    Possible types:
    - bugfix
    - feature
    - improvement
4. Make your code changes. Always make sure to sign-off (-s) on all commits made (git commit -s -m "Commit message")
5. Once you've committed all the code to this branch, push the branch to your *FORKED EDEN REPOSITORY* (git push fork bugfix/fix-twitter-auth)
6. Go back to your *FORKED EDEN REPOSITORY* on GitHub and submit a pull request.
7. An Eden developer will review your code and merge it in when it has been classified as suitable.