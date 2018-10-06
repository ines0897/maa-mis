<<?php
include ("../function.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD REMINDERS</title>
</head>
<style type="text/css">
  body{
    margin: 0px !important;
    padding: 0px !important;
  }
</style>
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<link rel="stylesheet" type="text/css" href="../css/Duty.css">
<?php require 'superAdminNavigator.php'; ?>
<center><h1> REMINDERS</center>
<center>
<br>
<div>

<form method="POST">  

EVENT   :  <input type="text" name="event" id="event" required> <br><br>
MESSAGE : <textarea rows="4" cols="50" name="message" placeholder="Comment here..." required></textarea><br>
DATE    :  <input type="date" name="date" class="dates" required><br><br>

<br><br>
<input type="submit" name="submit" id="submit" value="SUBMIT">

</form>
</div>

</center>

<?php

if(isset($_POST['submit'])){
  $event = $_POST['event'];
  $message = $_POST['message'];
  $date = $_POST['date'];
  
  $query= "INSERT INTO reminders(`id`, `event`, `message`, `date`, `type`, `datenow`) VALUES (NULL, '$event', '$message', '$date', 'unread', CURRENT_TIMESTAMP)";
  if(performquery($query)){
        echo "<script> alert('Reminder created successfully!')</script>";

       header('location:superAdmin.php');
  }else{
    echo "<script> alert('unkown error occured')</script>";

  }

}


?>


<script type="text/javascript">
  // disable previous dates
  var today = new Date().toISOString().split('T')[0];
  const dateElements = document.getElementsByClassName("dates");

  for(var i = 0; i < dateElements.length; i++) {
     dateElements[i].setAttribute('min', today);
  }
</script>

<?php require 'footer.php' ?>
</body>
</html>