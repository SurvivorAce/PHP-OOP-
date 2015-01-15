<?php
/* Constructors and Inheritance PART DOS
 Example 1 */
class Person{
	public $firstName;
	public $lastName;
	public $gender;
	public $age;

	function __construct($firstName, $lastName, $gender, $age) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;	
		$this->gender = $gender;
		$this->age = $age;
	}

	function getName() {
		return $this->firstName . " " . $this->lastName;
	}
}

class Blake extends Person{
	function __construct($firstName, $lastName, $gender, $age, $wave) {
		parent::__construct($firstName, $lastName, $gender, $age);
	$this->wave = $wave;	
	}

	function hi() {
		return $this->wave;
	}
}

class Brandon extends Person{
	function __construct($firstName, $lastName, $gender, $age, $punch) {
		parent::__construct($firstName, $lastName, $gender, $age);
	$this->punch = $punch;	
	}

	function hello() {
		return $this->punch;
	}
}

$blake = new Blake("Blake", "Dayman", "male", "16 years old", "*waves hi*");
print "Person #1 is " . $blake->getName();

echo "<br>";
/* Example 2 */

class Game{
	public $name;
	public $genre;
	public $rating;

	function __construct($name, $genre, $rating) {
		$this->name = $name;
		$this->genre = $genre;
		$this->rating = $rating;
	}

	function getName() {
		return $this->name;
	}
}

class GenericShooter extends Game{
	function __construct($name, $genre, $rating, $pew) {
		parent::__construct($name, $genre, $rating);
	$this->pew = $pew;	
	}	

	function play() {
		return $this->pew;
	}
}

class GenericMMORPG extends Game{
	function __construct($name, $genre, $rating, $raid) {	
		parent::__construct($name, $genre, $rating);
	$this->raid = $raid;	
	}

	function start() {
		return $this->raid;
	}
}

$genericShooter = new GenericShooter("CS:GO", "FPS", "9/10", "yes");
print $genericShooter->getName();

echo "<br>";
/* Example 3 */

class Thing{
	public $name;
	public $object;
	public $color;
	public $property;

	function __construct($name, $object, $color, $property) {
		$this->name = $name;
		$this->object = $object;
		$this->color = $color;
		$this->property = $property;		
	}

	function getName() {
		return "The mystery object is a " . $this->name . "!";
	}
}

class Branch extends Thing{
	function __construct($name, $object, $color, $property, $poke) {
		parent::__construct($name, $object, $color, $property);
	$this->poke = $poke;	
	}	

	function pickup() {
		return $this->poke;
	}
}

class Gun extends Thing{
	function __construct($name, $object, $color, $property, $shoot) {
		parent::__construct($name, $object, $color, $property);
	$this->shoot = $shoot;
	}

	function take() {
		return $this->shoot;
	}
}

$branch = new Branch("stick", "stick", "brown", "brittle", "yes"); 
print $branch->getName();

?>