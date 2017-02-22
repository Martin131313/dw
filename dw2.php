<?php 

$predavach = array('ime' => 'Gorjan', 'prezime' => 'Ilievski', 'godini' => 29);

 ?>

<table border="1">
	<tr><th>Key</th><th>Value</th></tr>
	
	<?php foreach($predavach as $key => $value){ ?>
	<tr>
	<td><?php echo $key; ?></td>
	<td><?php echo $value; ?></td>
	</tr>
	<?php } ?>

</table>


