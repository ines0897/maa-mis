<?php
session_start();
 include ("function.php");

$id = $_GET['id'];
$query="DELETE FROM `reminders` WHERE `reminders`.`id` = $id";
		
if(performquery($query)){
header("location:admin.php");
		
}else{
	echo "unkwon error";
}


?>

<br><br>
<a href="admin.php">back</a>