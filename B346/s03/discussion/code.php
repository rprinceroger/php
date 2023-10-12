<?php 

	//[Objects]
	//Object is compount data type (along with arrays)
	//Object is an instance of either a "built-in" or "user-defined" class

	//[Objects as Variables]
	// The code below directly creates an object using the object literal notation which uses "stdClass"
	//This is also an object instantiated on a "built-in" class

	$buildingObj = (object)[
		'name' => 'Caswyn Building',
		'floors' => 8,
		'address' => (object)[
			'barangay' => 'Sacred Heart',
			'city' => 'Quezon City',
			'country' => 'Philippines'
		]
	];



 //Mini Acitivty: 
	class Person {
    public $name;
    public $hobbies;
    public $favoriteGame;

    public function __construct($name, $hobbies, $favoriteGame) {
        $this->name = $name;
        $this->hobbies = $hobbies;
        $this->favoriteGame = $favoriteGame;
	    }
	}

	$roger = new Person("Roger", "watching anime", "dota");

	//[Classes]
		//A class is a programmer-defined data type, which include local function(methods) as well as local data(properties)
		//Class is a blueprint on creating objects with the same structure and behavior

	//[Objects from Classes]
		//We are going to create a building class

	class Building {
			//properties/attributes
				//characteristics of the object
		public $name;
		public $floors;
		public $address;

		//constructor
			//a constructor is used during the creation of an object
			//this will initialize the object's properties with the values provided when an object is instatiated

		public function __construct($name, $floors, $address){
			$this->name = $name;
			$this->floors = $floors;
			$this->address = $address;

		}

		//methods
		//an action that an object can perform

		public function printName(){
			return "The name of the building is $this->name";
		}
	}

	// Instantiating the Building class (object creation)
	$building = new Building('Caswynn Building', 8, 'Timog Avenue, Quezon City, Philippines');

	// Inheritance
	class Condominium extends Building {
	    public function printName() {
	        return $this->name;
	    }
	}

	$condominium = new Condominium('Enzo Condo', 5, 'Buendia Avenue, Makati City, Philippines');


	//Mini Activity
	//Mini-Activity 2
	class Bootcamper {
	    
	    public $name;
	    public $hobbies;
	    public $favoriteGame;
	    public $favoriteFood;

	    public function __construct($name, $hobbies, $favoriteGame, $favoriteFood) {
	        $this->name = $name;
	        $this->hobbies = $hobbies;
	        $this->favoriteGame = $favoriteGame;
	        $this->favoriteFood = $favoriteFood;
	    }

	    public function introduce() {
	        return "Hey, I am $this->name. I love $this->hobbies, and my favorite game is $this->favoriteGame. I like to eat $this->favoriteFood.";
	    }
	}

	$bootcamper1 = new Bootcamper("Cee", "painting, writing, and cooking", "League of Legends", "sisig");
	$bootcamper2 = new Bootcamper("Peter", "developing websites", "Valorant", "pizza");



?>