<pre>
<?php

class Car {
	public $wheels =4;
	public $engine = 2.0;

	public function drive(){
		echo "I am going somewhere and my fuel consm. 12L/100<br>";
	}
}

class Truck extends Car {
	public $wheels = 6;
	public $engine = 14.0;
	public $maxLoad =4000;
	
	public function drive(){
		echo "I am going somewhere and my fuel consm. 20L/100";
	}
}

$car1 = new Car();
$car2 = new Truck();

$car1->drive();
$car2->drive();
?>