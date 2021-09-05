<?php
	
	session_start();
	require_once 'connect.php';
	
	if((!isset($_POST['login']))||(!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if($polaczenie->connect_error!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		$sql = "SELECT * FROM oczka_db where login='$login' and password='$haslo'";
		
		if ($rezultat = @$polaczenie->query($sql))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['login'] = $wiersz['login'];
				unset($_SESSION['blad']);
				
				$rezultat->close();
				header('Location:na_forum.php');
			}else
			{
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location:forum.html');
			}
		}
		
		$polaczenie->close();
	}

?>
