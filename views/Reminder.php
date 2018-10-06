<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/Reminder.css">

<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>

<center>  <h1 style="color:white;"> REMINDERS </h1> </center>

<center>
<table id = "myTable">
<tr class="header">
  
     <th style="width:20%;">EVENT</th>
    <th style="width:40%;">MESSAGE</th>
     <th style="width:20%;">DATE</th>
     <th style="width:20%;">DATE TODAY</th>
    </tr>
    <tr>



<?php
$connect=mysqli_connect('localhost','root','','capstone');

  $sql = " SELECT event , message , date , datenow FROM reminders ";

  $recon = mysqli_query($connect, $sql);

      if(mysqli_num_rows($recon) > 0){ // table data start
  while ($row = mysqli_fetch_assoc($recon)) { // loop data start

    echo 
    "<td>".$row["event"]."</td>".
    "<td>".$row["message"]."</td>".
    "<td>".$row["date"]."</td>".
    "<td>".$row["datenow"]."</td>".

    "</tr>";

   
  } 
}


?>

<div>
  <a href="secondAdmin.php" ><img class="back"  src="../css/image/back.png"></a>
</div>
<?php require 'footer.php' ?>
</body>
</html>