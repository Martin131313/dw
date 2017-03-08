<?php
//if(isset($_GET) && !empty){
if(isset($_GET) > 0){
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
echo '<br/><br/>';
echo '<a href="index_html.php">LINK</a>';
}

  ?>



<form method="get" action="index.php">
Username:
<input type="text" placeholder="enter username" name="username" /></br>
Password:
<input type="text" placeholder="enter password" name="password" /></br>
Choose years:
<select name="years">
	<option></option>
	<option>18</option>
	<option>22</option>
	<option>24</option>
	<option>28</option>
</select><br/>
Gender:
<input type="radio" name="gender">Male</input>
<input type="radio" name="gender">Fmale</input><br/>
Enter PIN:
<input type="text" placeholder="enter 4 digit number" name="pin1" /></br>
Confirm PIN:
<input type="text" placeholder="confirm pin" name="pin2" /></br>
<input type="submit" value="Login"></br>
</form>