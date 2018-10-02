<?php
session_start();
 include ("function.php");

$id = $_GET['ID'];
$query= "DELETE FROM `leave1` WHERE `leave1`.`ID` = '$id'";
		
if(performquery($query)){
	$mainUrl = 'views/Leave.php';
	$return[0] = array('success' => true, 'url' => $mainUrl);
	generateToken($mainUrl);
}else{
	echo "unkwon error";
}


?>

<br><br>