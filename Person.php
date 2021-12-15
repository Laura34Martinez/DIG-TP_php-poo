<?php

class Person {

	private $name;
	private $surname;

	public function __construct($n, $sn) {
		$this -> name = $n;
		$this -> surname = $sn;
	}	
	
	
	public function sleep()  {
		echo " Je dors.. Zz... ";
	}

	public function eat()  {
		echo " Je mange !! ";
	}


  //Accesseurs
  public function getName() {
	  return $this -> name;
  }

  public function getSurname() {
	  return $this -> surname;
  }

  //Mutateurs
	public function setName() {
		return $this -> name;
	}
	public function setSurname() {
		return $this -> surname;
	}

}