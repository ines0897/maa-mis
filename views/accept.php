<?php
session_start();
 include("../function.php");

$id = $_GET['ID'];

$query = "SELECT * FROM `leave1` where ID='$id';";

if(fetchall($query)>0){

foreach (fetchall($query)as $row) {
	$badge = $row['Badge'];
	$fname = $row['Fullname'];
	$reason = $row['Reason'];
	$sdate = $row['Sdate'];
	$ldate = $row['Ldate'];
	$query="INSERT INTO `acceptedleave` (`ID`, `Badge`, `Fullname`, `Reason`, `Sdate`, `Ldate`) VALUES (NULL, '$badge', '$fname', '$reason', '$sdate', '$ldate');";

}
	
	$query .= "DELETE FROM `leave1` WHERE `leave1`.`ID` = '$id'";
		if(performquery($query))
		{
		header("location:Leave.php");
		}else{
				echo "unknown error";
			}
		}
	
?>
<br><br>
<a href="leave.php">back</a>