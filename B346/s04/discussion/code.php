<?php 
	class Building {
		//the properties of the building class is set to public
			//public - the default access modifier in PHP, properties, and methods set to public can be accessed everywhere
			//public access modifier: fully open
		//Comment out the public access modifier
		// public $name;
		// public $floors;
		// public $address;

		//private access modifier: method and property ca nonly be be accesssed within the class
		//comment out the private access modifier
		// private $name;
		// private $floors;
		// private $address;

		//protected properties or methods can only be accessed by the class that defines them
		//BUT the only difference of "protected" with "private" is any class that inherits from it can also access the properties or methods
		protected $name;
		protected $floors;
		protected $address;
		//the error is still present because direct access to properties is also disabled with the protected access modifier

		public function __construct($name,$floors,$address){
			$this->name = $name;
			$this->floors = $floors;
			$this->address = $address;
		}

		//Encapsulation
			//indicates that data should not be directly accessible to users BUT through the getter and setter functions
			//these functions act as intermediaries for accessing and modifying object properties
			//they determine whether an object's property can be accessed or changed
			//these functions are what we call:
				//getter (accessors)
				//setters (mutators)
		//getter (acessors): used to retrieve the value of a property
		public function getName(){
			return $this->name;
		}
		public function getFloors(){
			return $this->floors;
		}
		public function getAddress(){
			return $this->address;
		}

		//setter (mutators): used to modify the value of a property
		public function setName($name){
			$this->name = $name;
		}
		public function setFloors($floors){
			$this->floors = $floors;
		}
		public function setAddress($address){
			$this->address = $address;
		}


		//MA#1 Create a printName() method for Building
		public function printName(){
			return "The name of the building is $this->name";
		}

	}

	class Condominium extends Building {

	}

	//Key word being used when creating instances
	//instances
	$building = new Building('Caswynn Building',8,'Timog Avenue, Quezon City, Philippines');
	$condominium = new Condominium('Enzo Condo',5,'Buendia Avenue, Makati City, Philippines');



?>
