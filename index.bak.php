<!DOCTYPE html>
<html>
<head>
<style>
body{
    height: 684px;
    background: linear-gradient(maroon,black);
  }
  img{
    margin-top: 20px;
    height: 600px;
    margin-left: 50px;
  }
  input[type=text], select ,input[type=password] {
    width: 60%;
    padding: 12px 20px;
    margin: 20px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-family: courier;
    font-weight: bold;
  }
  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    width: 400px;
    height: 350px;
    opacity: 0.7;
    margin-top: -500px;
    margin-left: 770px;
    font-size: 20px;
    font-family: courier;
    font-weight: bolder;
  }
  input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px;
    font-family: courier;
    font-weight: bolder;
  }

  input[type=submit]:hover {
  background-color: #45a049;
  }

</style>

<img src="bjmp-logo.png">


<form action="" method="POST">

<div>
<center>
  <form action="" method="POST">
   <br><br><br>
    USERNAME: <input type="text" name="id" required>
    <br>
    PASSWORD: <input type="password" name="pass" required>
    <br>
    TYPE:  <input type="radio" name="type" value="sadmin">SUPER ADMIN <input type="radio" name="type" value="admin">ADMIN
    <br>
    <input type="submit" name="submit" value="LOGIN">
  </form></center>
</div>

<?php 
session_start();
$con=mysqli_connect('localhost','root','','capstone');

if(isset($_POST['submit'])){

	$id =$_POST['id'];
	$pass =$_POST['pass'];
  $type =$_POST['type'];

  $sql = "SELECT * FROM cap WHERE adminID='$type' and ID='$id' and PASSWORD='$pass' ";

  $result = mysqli_query($con,$sql);
  $rows = mysqli_num_rows($result);
  
  	while ($row = mysqli_fetch_array($result)){
  	if($row['ID']==$id && $row['PASSWORD']==$pass && $row['adminID']== 'sadmin'){
  		header("location:admin.php");
    }elseif ($row['ID']==$id && $row['PASSWORD']==$pass && $row['adminID']== 'admin') {
      header("location:admin2.php");
    }
  	
else{
    ?> <script> 
     alert('Wrong Password or ID')
    </script><?php 

    }


}


}
	?>


</form>







</body>
</html>