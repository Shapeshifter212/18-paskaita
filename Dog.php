<?php  

class Dog;

	public $owner;
	public $name;
	public $breed;
	public $size;
	public $fur;
	public $activeness;

	public function __construct($a1, $a2) {
		$this->owner = $a1;
		$this->name = $a2;

		echo $this->owner . " just got a dog named " . $this->name . "<br>";
	}

	public function walk ($where) {
		echo $this->owner . " is walking his dog named $name.<br>";
	}

	public function eat ($what) {
		echo $this->name . " eat lots of bad things.<br>";
	}

	public function sleep ($where) {
		echo "This car was repaired! <br>";
	}

	public function sleep ($where) {
		echo "This car was repaired! <br>";
	}

	public function destroy ($what) {
		echo "This car was repaired! <br>";
	}

?>