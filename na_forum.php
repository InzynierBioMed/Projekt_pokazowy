<!-- strona okulistyczna -->
<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<title>projekt: trzeba widzieć</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="utf-8"/>
</head>
<body>

	<div id="naglowek"><p>Trzeba widzieć</p></div>
	<div id="top_menu">
			<a href="choroby.html">Choroby oczu</a>&nbsp;&nbsp;|&nbsp;
			<a href="specjalisci.html">Specjaliści</a>&nbsp;&nbsp;|&nbsp;
			
	</div>
<div class="kolumna_srodkowa">
	<div class="panel_tresc">
	<?php
		session_start();

		echo "<p>Witaj na forum: ".$_SESSION['login']."!</p>";
		
	?>
	
</div>
</div>
	<form action = "logout.php">
		<input type = "submit" value = "Wyloguj się" />
	</form>
	</br>
	<div id="stopka">
			<p>Opracował Wiktor Ortaszewski</p>
			<p class="link"><a href="index.html">projekt pokazowy</a></p>
	</div>


</body>
</html>

