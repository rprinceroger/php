<?php 
	class Person {
	    // Properties with protected access modifier to allow inheritance
	    protected $name;
	    protected $age;
	    protected $address;

	    public function __construct($name, $age, $address) {
	        $this->name = $name;
	        $this->age = $age;
	        $this->address = $address;
	    }

	    // Getter and setter methods for name
	    public function getName() {
	        return $this->name;
	    }

	    public function setName($name) {
	        $this->name = $name;
	    }

	    // Getter and setter methods for age
	    public function getAge() {
	        return $this->age;
	    }

	    public function setAge($age) {
	        $this->age = $age;
	    }

	    // Getter and setter methods for address
	    public function getAddress() {
	        return $this->address;
	    }

	    public function setAddress($address) {
	        $this->address = $address;
	    }
	}

	class Student extends Person {
	    protected $studentId;

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

	// Create instances of Person, Student, and Employee
	$person = new Person('John Smith', 30, 'Quezon City, Metro Manila');
	$student = new Student('Jane Doe', 20, 'Makati City, Metro Manila');
	$student->setStudentId('2023-1980');
	$employee = new Employee('Mark Blain', 35, 'Pasig City, Metro Manila');
	$employee->setTeam('Tech Team');
	$employee->setRole('Team Lead');


?>