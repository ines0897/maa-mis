
<?php
session_start();
 include ("function.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>ASSIGNED DUTIES</title>
</head>
<Style>
	body{
			background-image: url("w.png");
			background-repeat: no-repeat;


		}


	.head{
		background-color: gray;
		height: 80px;
		width: 1365px;
		margin-top: -20px;
		margin-left: -10px;
		opacity:0.3;
		}	

	.title{
   		margin-top:-70px;
   		margin-left: 70px;
   		font-family: courier;
		font-size: 40px;
		color: white;

		}
	
	img{
  height: 50px;
  width: 50px;
  margin-top: -20px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f3f3f3;
    margin-top: -10px;
    margin-left: -10px;
    margin-right: -8px;
    height: 60px;
    opacity: 0.7;
    position: sticky;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: #666;
    text-align: center;
    padding: 22px 30px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
h1{
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
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
input[type=text],select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea{
    width: 40%;
    padding: 12px 10px;
    margin: 10px 0;
    margin-left: 50px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

</Style>

<?php

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

<body>

<ul>
  <li><a  href="admin.php"><img src="home.png"></a></li>
  <li><a  href="personnel.php"><img src="personal.png"></a></li>
  <li><a class="active" href="leave.php"><img src="leave.png"></a></li>
  <li><a href="duty.php"><img src="reminder.png"></a></li>
  <li style="float: right;"><a href="index.php"><img src="logout.png"></a></li>
</ul>


<center><h1> REMINDER'S</center>
<center>
<div>


<form method="POST">
  

EVENT   :  <input type="text" name="event" id="event" required> <br><br>
MESSAGE : <textarea rows="4" cols="50" name="message" placeholder="Comment here..." required></textarea><br>
DATE    :  <input type="date" name="date" rrequired><br><br>



<br><br>
<input type="submit" name="submit" id="submit" value="SUBMIT">

</form>

 

</div>

</center>

</body>
</html>