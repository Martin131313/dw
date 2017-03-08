<!-- GET e array(niza) -->
<!-- count se koristi kaj arrays i dava kolku elementi ima vo nizata -->
<!-- text editor (Netbeans) -->
<!-- empty Returns FALSE if var exists and has a non-empty, non-zero value. Otherwise returns TRUE. -->
<!-- isset Returns TRUE if var exists and has value other than NULL. FALSE otherwise.-->

<?php

// var_dump($_GET);
// echo '<br/>';
// var_dump(count($_GET));
// echo '<br/>';

// var_dump($_GET);
// exit;

// if (count($_GET) > 0){
// if(!empty($_GET)){	


if(isset($_GET['username']) && isset($_GET['password']) && strlen($_GET['username']) > 5 && strlen($_GET['password']) > 5 && isset($_GET['years']) && $_GET['years'] != '' && isset($_GET['gender'])){
	if(isset($_GET['pin1']) && is_numeric($_GET['pin1']) && isset($_GET['pin2']) && is_numeric($_GET['pin2'])){
		if($_GET['pin1'] == $_GET['pin2']){
				echo 'Validni i isti PIN-ovi :)<br/>';
		} else {
			echo 'Validen ama razlichni PIN-ovi :)<br/>';
		}
	}
	else {
		echo 'Nevalidni PIN-ovi :(<br/>';
	}
}
else {	
	echo 'Nevalidni username i/ili password<br/>';
}

echo '<a href="index_html.php">LINK</a>';


  ?>