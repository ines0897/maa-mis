<?php
include ("function.php");

if(isset($_POST['submit'])){
  $event = $_POST['event'];
  $message = $_POST['message'];
  $date = $_POST['date'];
  
  $query= "INSERT INTO reminders(`id`, `event`, `message`, `date`, `type`, `datenow`) VALUES (NULL, '$event', '$message', '$date', 'unread', CURRENT_TIMESTAMP)";
  if(performquery($query)){
       echo "<script> alert('save')</script>";
  }else{
    echo "<script> alert('unkown error occured')</script>";

  }

}


?>