<?php
	class Blake{
		//class body
	};
	class Ulises{
		//class body
	};
	class Dimitri{
		//class body
	};

	$Buhlockay = new Blake();
	$Jewlises = new Ulises();
	$Dymytry = new Dimitri();

	class Blake{
		protected $fullName = "Blake Dayman";
		private $gender = "male";
		public $hairColor = "black";

		function getCodename(){
			return "{$this->fullName}";
		}
	}

	$Buhlockay = new Blake();	
	$Buhlockay->fullName = "Buhlockay Dayman";

	print "His codename is {$Buhlockay->getCodename().}";

	class Ulises{
		protected $fullName = "Ulise Gomez-Jaramillo";
		private $gender = "male";
		public $hairColor = "black";	

		function getCodename(){
			return "{$this->fullName}";
		}
	}

	$Jewlises = new Ulises();	
	$Jewlises->fullName = "Jewlises Gomez-Jaramillo";

	print "His codename is {$Jewlises->getCodename().}";			

	class Dimitri{
		protected $fullName = "Dimitri Storm Nooch La Or";
		private $gender = "male";
		public $hairColor = "black";

		function getCodename(){
			return "{$this->fullName}";
		}
	}

	$Dymytry = new Dimitri();	
	$Dymytry->fullName = "Dymytry Storm Nooch La Or";

	print "His codename is {$Dymytry->getCodename().}";		



?>