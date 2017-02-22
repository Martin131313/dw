<?php  
$studenti = array(
array('ime' => 'Martin', 'prezime' => 'Postolovski', 'godini' => 22),
array('ime' => 'Stefan', 'prezime' => 'Blazevski', 'godini' => 20),

	);
// print_r($studenti);
// $brojac = 1;
?>

<table border=1>
	<tr><th>Broj</th><th>Ime</th><th>Prezime</th><th>Godini</th></tr>

<?php foreach($studenti as $indeks => $student){ ?>
<tr>

<td><?php echo $indeks+1; ?></td>
<td><?php echo $student['ime']; ?></td>
<td><?php echo $student['prezime']; ?></td>
<td><?php echo $student['godini']; ?></td>

</tr>

<?php } ?>

</table>
