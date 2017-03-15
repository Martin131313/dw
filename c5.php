<?php 

function parnost_na_dolzina($in1, $in2 = 'Mjau'){
	echo $in1 . $in2;
}

$string1 = 'Povik';
$string2 = 'Call of the funkcija';

parnost_na_dolzina($string1, $string2);
echo '<br/>';
parnost_na_dolzina($string1)
// parnost_na_dolzina('Call of the funkcija');


 ?>