
<?php
session_start();
 include ("function.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
			background-image: url("w.png");
			background-repeat: no-repeat;


		}

		h1{
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
}
   div {
    width: 80%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: 10px;
    opacity: 0.8;

}

input[type=text],select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=comment],select {
    width: 100%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date],select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: -20px;
    opacity: 0.8;

}
a:link, a:visited {
  background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    width: 86%;
    border-radius: 4px;
    cursor: pointer;
}

</style>

<?php

if(isset($_POST['submit1'])){
  $badge = $_POST['badge'];
  $fname = $_POST['name'];
  $reason = $_POST['reason'];
  $sdate = $_POST['sdate'];
  $ldate = $_POST['ldate'];
  $query= "INSERT INTO `leave1` (`ID`, `Badge`, `Fullname`, `Reason`, `Sdate`, `Ldate`) VALUES (NULL, '$badge', '$fname', '$reason', '$sdate', '$ldate')";
  if(performquery($query)){
       echo "<script> alert('pending')</script>";
  }else{
    echo "<script> alert('unkown error occured')</script>";

  }

}


?>

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
<br><br>
<a href="admin2.php">BACK</a>
</form>

</div>



<script type="text/javascript">
  // disable previous dates
  var today = new Date().toISOString().split('T')[0];
  const dateElements = document.getElementsByClassName("dates");

  for(var i = 0; i < dateElements.length; i++) {
     dateElements[i].setAttribute('min', today);
  }
</script>


</body>
</html>