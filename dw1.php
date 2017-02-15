<?php  

// $broj = 4;
//echo $broj++;
// echo ++$broj;

// echo '<hr/>';

// $parnost = ($broj % 2 == 0) ? 'Paren': 'Neparen';
// echo $parnost;

// if($broj % 2 ==0){
// 	echo 'Paren';
// } else{
// 	echo 'Neparen';
// }

// $ocenki =  array(8 , 9 , 10 , 8 , 7);
// $broj_elementi = count($ocenki);

// var_dump($ocenki);
// $suma = 0;
// $indeks = 0;	

// while ($indeks < 4){
// 	$suma = $suma + $ocenki[$indeks];
// 	$indeks++;
// }
//echo = $suma;



//for(postavuvanje na pochetni uslovi ; uslov ; inkrement-promena)
// for ($suma = 0, $indeks = 0 ; $indeks < $broj_elementi ; $indeks++) { 
// 	$suma += $ocenki[$indeks];
// }
// echo 'For: '.$suma;
// echo '<br/>Prosek: '.$suma / 4;


//nemoze da ima asocijativna niza so dva isti indeksi(ineto :)
$ucenici = array(
'Blazevski' => 'Stefan',
'Postolovski' => 'Martin',
'Stojkovski' => 'Stefan',
'Danev' => 'Martin',
'Dobrohotova' => 'Irina',
	);
// print_r($ucenici);


$brojac = 1;
foreach ($ucenici as $prezime => $ime) {
	echo $brojac++.'. '.$ime.' '.$prezime.'<br/>';
	// echo $brojac.$ime.'<br/>';
	// $brojac++;
}




?>