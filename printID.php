<!DOCTYPE html>
<html>
<head>
	<title>PRINT</title>
</head>
<style>
	input[type=text],select {
    width: 20%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
pre{
    font-family: lucida;
    font-size: 15px;
}
input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#img1{
	height: 200px;
	width: 200px;
	border-radius: 5px;
}

</style>
<body>
<?php  
require 'conn.inc.php';

if(isset($_GET['id'])) {
    $var = $_GET['id'];  
  $query = "SELECT * FROM images1 where id =$var ";
  $query_run = mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) > 0){
    $row = mysqli_fetch_assoc($query_run);
    $image = $row['image'];
    $name = $row['name'];
    $age = $row['age'];
    $address = $row['address'];
    $contact = $row['ce'];
    $id = $row['id'];

  }
}


?>
<center>
<form method="POST">
<pre>
<?php
echo "<center><img id='img1' src ='images/".$row["image"]."'>";
?><br>
ID:				 <input type="text" name="id" value="<?php echo $id;?>" readonly><br>
NAME: 			 <input type="text" name="name" value="<?php echo $name;?>" readonly><br>
AGE: 			 <input type="text" name="age" value="<?php echo $age;?>" readonly><br>
ADDRESS:		 <input type="text" name="address" value="<?php echo $address;?>" readonly><br>
CONTACT NO: 	 <input type="text" name="contact" value="<?php echo $contact;?>" readlonly> <br>
<?php
echo "<center><img src='barcode.php?codetype=Code39&size=40&text=".$id."&print=true'/>";
?><br>

<a titlt ="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor:pointer;"><input type="submit" name="print" value="PRINT"></a>

</pre>
</form>

</body>
</html>