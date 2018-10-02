<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/RegisterLeave.css">

<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>


<body>

<center>  <h1> REQUEST LEAVE FORM </h1> </center>
<center>
<div>

<form method="POST">

BADGE NO.   : <input type="number" name="badge" id="badge"> <br><br>
FULL NAME   : <input type="text" name="name" id="name"><br><br>
REASON      : <select id="reason" name="reason">
            <option value="Sick leave"> SICK LEAVE </option>
            <option value="Birthday leave"> BIRTHDAY LEAVE</option>
            <option value="Vacation leave"> VACATION LEAVE</option>
</select>
<br><br>
START DATE  : <input type="date" class="dates" name="sdate"><br><br>
LAST DATE   : <input type="date" class="dates" name="ldate">


<br><br>
<input type="submit" name="submit1" id="submit" value="SUBMIT">
<a href="secondAdmin.php">BACK</a>
</form>

</div>

<?php

if(isset($_POST['submit1'])){
  $badge = $_POST['badge'];
  $fname = $_POST['name'];
  $reason = $_POST['reason'];
  $sdate = $_POST['sdate'];
  $ldate = $_POST['ldate'];
  $query= "INSERT INTO `leave1` (`ID`, `Badge`, `Fullname`, `Reason`, `Sdate`, `Ldate`) VALUES (NULL, '$badge', '$fname', '$reason', '$sdate', '$ldate')";
  
  if(performquery($query)){
       echo "<script> alert('pending')</script>";//sweetalert
  }else{
    echo "<script> alert('unkown error occured')</script>";//sweetalert
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