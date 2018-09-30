<?php 
	session_start();
	unset($_SESSION['token']);
	unset($_SESSION['mainUrl']);
	session_destroy();
 ?>