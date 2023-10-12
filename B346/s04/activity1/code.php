<?php 
	class Building {
	    protected $name;
	    protected $floors;
	    protected $address;

	    public function __construct($name, $floors, $address) {
	        $this->name = $name;
	        $this->floors = $floors;
	        $this->address = $address;
	    }

	    public function getName() {
	        return $this->name;
	    }

	    public function getFloors() {
	        return $this->floors;
	    }

	    public function getAddress() {
	        return $this->address;
	    }

	    public function setName($name) {
	        $this->name = $name;
	    }
	}

	class Condominium extends Building {
	    public function setFloors($floors) {
	        if ($this->floors === null) {
	            $this->floors = $floors;
	        }
	    }

	    public function setAddress($address) {
	        if ($this->address === null) {
	            $this->address = $address;
	        }
	    }
	}

	$building = new Building('Caswyn Building', 8, 'Timog Avenue, Quezon City, Philippines');
	$condominium = new Condominium('Enzo Condo', 5, 'Buendia Avenue, Makati City, Philippines');

?>
