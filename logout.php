<?php
	session_start();
	session_unset();//zamykanie sesji
	header('Location: forum.html');
?>