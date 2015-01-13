<?php

class Anderson{
	public $age;
	public $hobby;

	function __construct($age, $hobby){
		$this->age = $age;
		$this->hobby = $hobby;
	}

	function description(){
		return "Anderson Nguyen, also known as 'Andersenpai' is currently " . $this->age . "and likes to " . $this->hobby . "in his free time." ;
	}

	function troll(){
		return " Andersenpai is currently  " . $this->age . ". He is also a master of taijutsu and " . $this->hobby . "." ;	
	}
}

$Andersenpai = new Anderson("15 years old ", "play games ");
$AND3RS3NP41 = new Anderson("twenty juan years old", "owns noobs for te lolz");
print $Andersenpai->description();
print $AND3RS3NP41->troll();



?>