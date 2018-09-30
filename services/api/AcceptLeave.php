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
  $return = array('success' => true, 'url' => 'views/Leave.php');
  echo json_encode($return);
}
	
	$query .= "DELETE FROM `leave1` WHERE `leave1`.`ID` = '$id'";
		if(performquery($query))
		{
		 $return = array('success' => true, 'url' => 'views/superAdmin.php');
  		echo json_encode($return);
		}else{
				 $return = array('success' => false);
 				 echo json_encode($return);
			}
		}
	
?>
<br><br>
<a href="leave.php">back</a>