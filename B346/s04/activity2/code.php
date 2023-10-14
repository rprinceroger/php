<?php 
	class Person {
	    protected $name;
	    protected $age;
	    protected $address;

	    public function __construct($name, $age, $address) {
	        $this->name = $name;
	        $this->age = $age;
	        $this->address = $address;
	    }

	    public function getName() {
	        return $this->name;
	    }

	    public function setName($name) {
	        $this->name = $name;
	    }

	    public function getAge() {
	        return $this->age;
	    }

	    public function setAge($age) {
	        $this->age = $age;
	    }

	    public function getAddress() {
	        return $this->address;
	    }

	    public function setAddress($address) {
	        $this->address = $address;
	    }
	}

	class Student extends Person {
	    protected $studentId;

	    public function __construct($name, $age, $address, $studentId) {
	    	// Call the constructor of the parent class (Person)
	        parent::__construct($name, $age, $address); // This initializes properties inherited from the Person class
	        $this->studentId = $studentId;
	    }

	    public function getStudentId() {
	        return $this->studentId;
	    }

	    public function setStudentId($studentId) {
	        $this->studentId = $studentId;
	    }
	}

	class Employee extends Person {
	    protected $team;
	    protected $role;

	    public function __construct($name, $age, $address, $team, $role) {
	    	// Call the constructor of the parent class (Person)
	        parent::__construct($name, $age, $address); // This initializes properties inherited from the Person class
	        $this->team = $team;
	        $this->role = $role;
	    }

	    public function getTeam() {
	        return $this->team;
	    }

	    public function setTeam($team) {
	        $this->team = $team;
	    }

	    public function getRole() {
	        return $this->role;
	    }

	    public function setRole($role) {
	        $this->role = $role;
	    }
	}

?>