<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/Reminder.css">
<link rel="stylesheet" type="text/css" href="../css/superAdmin.css">
<style type="text/css">
  .back{
    margin-top: -200px;
  }
</style>
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>

<center>  <h1 style="color:white;"> ACCEPTED  & REJECTED LEAVE </h1> </center>
<div class="col-md-12" id="ARLeave">
    <div class="col-md-6 container">
    <center>
    <h2 style="color:white;">ACCEPTED LEAVES</h2> 

    <table id = "myTable1">
    <tr class="header">
      
         <th style="width:10%;">BADGE</th>
        <th style="width:20%;">FULLNAME</th>
         <th style="width:10%;">REASON</th>
         <th style="width:10%;">FROM</th>
         <th style="width:10%;">TO</th>
        </tr>
        <tr>



    <?php
    $connect=mysqli_connect('localhost','root','','capstone');

      $sql = " SELECT * FROM `acceptedleave` ";

      $recon = mysqli_query($connect, $sql);

          if(mysqli_num_rows($recon) > 0){ // table data start
      while ($row = mysqli_fetch_assoc($recon)) { // loop data startS

        echo 
        "<td>".$row["Badge"]."</td>".
        "<td>".$row["Fullname"]."</td>".
        "<td>".$row["Reason"]."</td>".
        "<td>".$row["Sdate"]."</td>".
        "<td>".$row["Ldate"]."</td>";
      
        ?>
        </tr>
        <?php
      } 
    }else{
      echo "NO RECORD YET";
    }
    ?>
    </table>

  </div>
    <div class="col-md-6 container">
    <center>
    <h2 style="color:white;">REJECTED LEAVES</h2>

    <table id = "myTable1">
    <tr class="header">
      
         <th style="width:10%;">BADGE</th>
        <th style="width:20%;">FULLNAME</th>
         <th style="width:10%;">REASON</th>
         <th style="width:10%;">REASON FROM ORGANIZATION</th>
        </tr>
        <tr>



    <?php
    $connect=mysqli_connect('localhost','root','','capstone');

      $sql = "SELECT * FROM `rejectedleavae`";

      $recon = mysqli_query($connect, $sql);

          if(mysqli_num_rows($recon) > 0){ // table data start
      while ($row = mysqli_fetch_assoc($recon)) { // loop data startS

        echo 
        "<td>".$row["Badge"]."</td>".
        "<td>".$row["Fullname"]."</td>".
        "<td>".$row["Reason"]."</td>".
        "<td>".$row["ReasonofOrg"]."</td>";
      
        ?>
        </tr>
        <?php
      } 
    }else{
      echo "NO RECORD YET";
    }
    ?>
    </table>
  </div>
</div>
 <div>
  <a href="secondAdmin.php"><img class="back"  src="../css/image/back.png"></a>
</div>
<?php require 'footer.php' ?>
</body>
</html>