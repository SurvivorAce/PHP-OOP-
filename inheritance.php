<?php
/* Example 1 */
class Person{
	public $firstName;
	public $lastName;
	public $gender;
	public $age;
	public $wave;
	public $punch;

	function __construct($firstName, $lastName, $gender, $age, $wave, $punch) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;	
		$this->gender = $gender;
		$this->age = $age;
		$this->wave = $wave;
		$this->punch = $punch;
	}

	function getName() {
		return $this->firstName . " " . $this->lastName;
	}
}

class Blake extends Person{
	function hi() {
		return $this->wave;
	}
}

class Brandon extends Person{
	function hello() {
		return $this->punch;
	}
}

$Blake = new Person("Blake", "Dayman", "male", "16 years old", "*waves hi*", "*punches face*");
print "Person #1 is " . $Blake->getName();

echo "<br>";
/* Example 2 */

class Game{
	public $name;
	public $genre;
	public $rating;
	public $pew;
	public $raid;

	function __construct($name, $genre, $rating, $pew, $raid){
		$this->name = $name;
		$this->genre = $genre;
		$this->rating = $rating;
		$this->pew = $pew;
		$this->raid = $raid;
	}

	function getName() {
		return $this->name;
	}
}

class GenericShooter extends Game{
	function play() {
		return $this->pew;
	}
}

class GenericMMORPG extends Game{
	function start() {
		return $this->raid;
	}
}

$GenericShooter = new Game("CS:GO", "FPS", "9/10", "yes", "yes");
print $GenericShooter->getName();

echo "<br>";
/* Example 3 */

class Thing{
	public $name;
	public $object;
	public $color;
	public $property;
	public $poke;
	public $shoot;

	function __construct($name, $object, $color, $property, $poke, $shoot) {
		$this->name = $name;
		$this->object = $object;
		$this->color = $color;
		$this->property = $property;		
		$this->poke = $poke;
		$this->shoot = $shoot;
	}

	function getName() {
		return "The mystery object is a " . $this->name . "!";
	}
}

class Branch extends Thing{
	function pickup() {
		return $this->poke;
	}
}

class Gun extends Thing{
	function take() {
		return $this->shoot;
	}
}

$Branch = new Thing("stick", "stick", "brown", "brittle", "yes", "no"); 
print $Branch->getName();

?>