<?php
/* Example 1 */

	class Person1{
	public $firstName;
	public $lastName;
	public $ethnicity;

		function __construct($firstName, $lastName, $ethnicity) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->ethnicity = $ethnicity;
		}

		function getName() {
		return $this->firstName . " " . $this->lastName;
		}
}
	class Person2{
	public $firstName;
	public $lastName;
	public $ethnicity;

		function __construct($firstName, $lastName, $ethnicity) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->ethnicity = $ethnicity;
		}

		function getName() {
		return $this->firstName . " " . $this->lastName;
		}
}
	class Person3{
	public $firstName;
	public $lastName;
	public $ethnicity;

		function __construct($firstName, $lastName, $ethnicity) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->ethnicity = $ethnicity;
		}

		function getName() {
		return $this->firstName . " " . $this->lastName;
		}
}
/* Example 2 */

$Blake = new Person1("Blake", "Dayman", "Asian");
print "Person 1: " . $Blake->getName();
echo "<br>";
$Ulises = new Person2("Ulises", "Gomez", "Mexican");
print "Person 2: " . $Ulises->getName();
echo "<br>";
$Dimitri = new Person3("Dimitri", "Nooch", "Asian");
print "Person 3: " . $Dimitri->getName();
echo "<br>";

?>