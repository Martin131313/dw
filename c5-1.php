<?php 

// 0 = false; 1 = true

function parnost($broj){
	return !($broj % 2);
}

function dolzina($string){
	$dolzina = strlen($string);
	if($dolzina > 5){
		return true;
	} else {
		return parnost($dolzina);
	}
}

echo dolzina('zdra');
 ?>