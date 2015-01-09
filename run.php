<?php
// Example 1

$right = array('this', 'is', 'an array');

echo is_array($right) ? 'Array' : 'not an Array';
echo "\n";

$wrong = 'this is a string';

echo is_array($wrong) ? 'Array' : 'not an Array';

// Example 2

class friendClass{

} 

function get_friends($obj){

	if (!is_object($obj)) {
		return false;
	}

	return $obj->friends;

}

$obj = new friendClass();
$obj->friends = array('Blake', 'Ulises', 'Dimitri');

var_dump(get_friends(null));
var_dump(get_friends($obj));

// Example 3

error_reporting(E_ALL);

$thing = NULL;
var_dump(is_null($inexistent), is_null($thing));

?>