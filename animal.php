<pre>
<?php
class Animal {
	public $weight;
	public $age;
	public $name;

	
}

class Dog extends Animal {
	public $name = "rex";
	public $size= 2;
	public $color="red";

	public function walk(){
		echo "Dog is going on right.<br>";
	}
}
class Cat extends Animal {
	public $name="Murka";
	public $size = 3;
	public $color="White";

	public function walk(){
		echo "A cat is walking something.<br>";
	}

}
class Fish extends Animal {
	public $color = "Yellow";
	public $veisle = "xxcxc";

	public function walk(){
		echo "Fish is walking somewhere";
	}
}
$animal1 = new Animal();
$dog1 = new Dog();
$cat1 = new Cat();
$fish1 = new Fish();


$dog1->walk();
$cat1->walk();
$fish1->walk();
?>