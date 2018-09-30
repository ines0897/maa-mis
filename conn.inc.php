<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'capstone';

$conn = @mysqli_connect($server, $user, $pass, $db);
      if(!$conn){
      die("Failed to Connect!".mysqli_connect_error());
      }
    
?>
