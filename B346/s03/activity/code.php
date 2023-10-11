<?php 
	/*
	Activity instruction:
	Create a Person class with three properties: firstName, middleName and lastName.
	- Create two child classes for Person: Developer and Engineer.
	- Create a printName() method in each of the classes and must have the following output:
		- Person: "Your full name is Senku Ishigami."
		- Developer: "Your name is John Finch Smith and you are a developer."
		- Engineer: "You are an engineer named Harold Myers Reese."
	*/

	class Person {
	    protected $firstName;
	    protected $middleName;
	    protected $lastName;

	    public function __construct($firstName, $middleName, $lastName) {

	        $this->firstName = $firstName;
	        $this->middleName = $middleName;
	        $this->lastName = $lastName;
	    }

	    public function printName() {
	        return "Your full name is {$this->firstName} {$this->middleName} {$this->lastName}.";
	    }
	}

	class Developer extends Person {
	    public function printName() {
	        return "Your name is {$this->firstName} {$this->middleName} {$this->lastName} and you are a developer.";
	    }
	}

	class Engineer extends Person {
	    public function printName() {
	        return "You are an engineer named {$this->firstName} {$this->middleName} {$this->lastName}.";
	    }
	}

?>