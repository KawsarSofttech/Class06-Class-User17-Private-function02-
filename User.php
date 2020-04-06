


<?php
// No object can be made under interface or abstract class
class User{
	
	private $name = "Mafij";

	public function __construct()
	{
		// echo "Hi There!<br>";
	}

	public function getName()
	{
		return $this->name;
	}

	public function greet()
	{
		echo "Welcome to OOP<br>";
	}

}

?>
