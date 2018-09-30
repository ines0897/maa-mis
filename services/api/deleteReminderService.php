<?php
session_start();
include ("../function.php");

$id = $_POST['id'];

$query="DELETE FROM `reminders` WHERE `reminders`.`id` = $id";
    
if(performquery($query)){
  $return = array('success' => true, 'url' => 'views/superAdmin.php');
  echo json_encode($return);
} else {
  $return = array('success' => false);
  echo json_encode($return);
}
die();
?>
