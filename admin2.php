
<?php
session_start();
 include ("function.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
<style>
	body{
    height: 695px;
    background: linear-gradient(maroon,black);
  }

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
img{
	height: 150px;
	width: 350px;
}
header{
  font-size: 17px;
  font-style: Tahoma;
  margin-left: 1000px;
  margin-top: 8px;
}
header a:hover{
  background-color: red;
  text-decoration: none;
}
</style>
<body>
<center>


     
  

<pre>

<a href="leavereg.php"><button class="button"><strong>REQUEST LEAVE FORM</strong>
<img src="leavereg.png"></button></a>            <a href="createID.php"><button class="button"><strong>CREATE ID FORM</strong>
<img src="createid.png"></button></a>
<br><br>
    <a href="view.php"><button class="button"><strong>REMINDER'S</strong><?php $query = "SELECT * from `reminders` where `type` = 'unread' order by `datenow` DESC"; if(count(fetchAll($query))>0){?> <span class="badge badge-light"><?php echo count(fetchAll($query)); ?></span> <?php }    ?>

<img src="reminders.png"></button></a>             <a href="generate_barcode.php"><button class="button"><strong>VISITORS ID</strong>
<img src="id.png"></button></a>  



 <a href="index.php"><button class="button"><strong>LOG-OUT</strong></button></a>



</center>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>