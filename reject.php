<?php
session_start();
 include ("function.php");

$id = $_GET['ID'];
$query= "DELETE FROM `leave1` WHERE `leave1`.`ID` = '$id'";
		
if(performquery($query)){

		header("location:leave.php");
}else{
	echo "unkwon error";
}


?>

<br><br>
<a href="leave.php">back</a>