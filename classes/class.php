<?php 


class Person {
	//properties

	public $name;
	public $surname;
	public $age;

	//contructor
	public function __construct($name, $surname, $age){
		$this->name = $name;
		$this->surname = $surname;
		$this->age = $age;
	}

	

	//methods
	public function setName($name){
		$this->name = $name;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function setAge($age){
		$this->age = $age;
	}
	}

		

 ?>