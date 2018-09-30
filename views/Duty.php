<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<link rel="stylesheet" type="text/css" href="../css/Duty.css">
<?php require 'superAdminNavigator.php'; ?>
<center><h1> REMINDER'S</center>
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