<?php  

// var_dump($_GET);
// echo '<hr/>';
if($_GET['strana'] == 'studenti'){
	include 'dw2.php';
} else {
	include 'dw2.2.php';
}


?>

<a href="?strana=predavachi">Predavachi</a><br/>
<a href="dw2.3.php?strana=studenti">Studenti</a><br/>