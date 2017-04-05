<?php 

class Klasa{

	protected $property1;
	public $property2;

	public function method1(){
		echo 'method1';
	}

	public function method2(){
		echo 'method2';
	}

	public function setProperty1($p1){
		$this->property1 = $p1;
	}

	public function getProperty1(){
		return $this->property1;
	}

	public function setProperty2($p2){
		$this->property2 = $p2;
	}

	public function getPropert2(){
		return $this->property2;
	}

	public function print_some(){
		echo $this->property1 . ' _ ' . $this->property2. ' _ ' .$this->property3. '</br>';
	}



}

class Klasa2 extends Klasa{

	public $property3;

	public function zdravo_rawr(){
		echo 'Zdravo Kukle';
	}

}


$objekt = new Klasa;
$objekt->setProperty1 ('RAWR-1'); // ova e za pecatenje protected 
// $objekt->property1 = 'RAWR-1'; //ova e za pecatenje public
$objekt->property2 = 'RAWR-2';
$objekt->property3 = 'RaWr';
$objekt->print_some();
// $objekt->zdravo_rawr();



$objekt = new Klasa2;
$objekt->setProperty1 ('RAWR-3'); // ova e za pecatenje protected 
// $objekt->property1 = 'RAWR-3'; //ova e za pecatenje public
$objekt->property2 = 'RAWR-4';
$objekt->property3 = 'RaWr';
$objekt->print_some();
$objekt->zdravo_rawr();










 ?>