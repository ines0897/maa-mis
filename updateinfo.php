<?php 
session_start();
ob_clean();
ob_flush();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PERSONNEL'S INFORMATION</title>
</head>
<style >
body{
            background-image: url("w.png");
           
        }
	

	.border{
		opacity: 0.6;
		margin-top:-10px;
		margin-left: -11px;
		background-color: grey;
		border-color: grey;
		height: 70px;
		width: 1350px;
		font-size: 50px;
		font-family: courier;
		font-weight: bolder;

	}
	p{
		letter-spacing: 3px;
		font-size: 20px;
	}
	h1{
		color: white;
		margin-left: 40px;
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

input[type=tel], select {
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
  
pre{
    font-family: lucida;
}
a:link, a:visited {
  background-color: #4CAF50;
    color: white;
    padding: 14px 25px;
    text-align: center;	
    text-decoration: none;
    display: inline-block;
	width: 86%;
	border-radius: 4px;
    cursor: pointer;
}


</style>



<body>
<?php  
require 'conn.inc.php';

if(isset($_GET['Badge'])) {
    $var = $_GET['Badge'];  
  $query = "SELECT * FROM addpersonnel where Badge =$var ";
  $query_run = mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) > 0){
    $row = mysqli_fetch_assoc($query_run);
    $Badge = $row['Badge'];
    $Fname = $row['Fname'];
    $Lname = $row['Lname'];
    $Unit = $row['Unit'];
    $Contact = $row['Contact'];
    $Address = $row['Address'];
    $Hair = $row['Hair'];
    $Eyes = $row['Eyes'];
    $Ename = $row['Ename'];
    $Relationship = $row['Relationship'];
    $Etel = $row['Etel'];
    $Ecell = $row['Ecell'];


  }
}



?>
<pre class="border">  PERSONNEL'S INFORMATION:</pre>
<pre>
	<div>
  <form method="POST">
  <label> BADGE NO.:</label>
  <input type="number" name="Badge" id="Badge" value="<?php echo $Badge;?>">
    <label for="fname">FIRST NAME:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                                        <label for="lname">LAST NAME:</label>
    <input type="text" id="fname" name="Fname" value="<?php echo $Fname;?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="lname" name="Lname" value="<?php echo $Lname;?>">

    <label for="unit">UNIT/REGION:</label>
    <input type="text" id="unit" name="Unit" value="<?php echo $Unit;?>"> 

    <label for="contact">CONTACT NO.</label>
    <input type="text" name="Contact" id="Contact" value="<?php echo $Contact;?>">                
 

    <label for="comment">ADDRESS:</label>
    <input type="text" id="address" name="Address" value="<?php echo $Address;?>">
    
    <label for="hair">COLOR OF THE HAIR</label>                                                                                                                                                           <label for="eyes">COLOR OF THE EYES</label>
    <input type="text" name="Hair" id="Hair" value="<?php echo $Hair;?>">                  <input type="text" name="Eyes" id="Eyes" value="<?php echo $Eyes;?>"> 
     
  
    

    <p> EMERGENCY CONTACT </p>

    <label for="ename">NAME:</label>
    <input type="text" id="ename" name="Ename" value="<?php echo $Ename;?>"> 
    <label for="relationship">RELATIONSHIP:</label>
    <input type="text" id="relationship" name="Relationship" value="<?php echo $Relationship;?>">
    <br>
    <label for="tele">TELEPHONE:</label>
    <input type="tel" id="tele" name="Etel" maxlength="10" value="<?php echo $Etel;?>">
    <label for="cell">CELL:</label>
    <input type="tel" id="cell" name="Ecell" maxlength="11" value="<?php echo $Ecell;?>">

    <br><br>
<center>
    <input type="submit" id="update" name="update" value="UPDATE"><br><br>
    <a href="personnel.php">BACK</a>
</center>
    </form>

</div>
</pre>
</body>
<?php
require 'conn.inc.php';

$Badge = '';
$Fname = '';
$Lname = '';
$Unit = '';
$Contact = '';
$Address = '';
$Hair = '';
$Eyes = '';
$Ename = '';
$Relationship = '';
$Etel = '';
$Ecell = '';
$var = '';

if (isset($_GET['Badge'])) {
	$var = $_GET['Badge'];	
  $query = "SELECT * FROM addpersonnel where Badge =$var ";
  $query_run = mysqli_query($conn, $query);
  if(mysqli_num_rows($query_run) > 0){
    $row = mysqli_fetch_assoc($query_run);

    $Badge = $row['Badge'];
    $Fname = $row['Fname'];
    $Lname = $row['Lname'];
    $Unit = $row['Unit'];
    $Contact = $row['Contact'];
    $Address = $row['Address'];
    $Hair = $row['Hair'];
    $Eyes = $row['Eyes'];
    $Ename = $row['Ename'];
    $Relationship = $row['Relationship'];
    $Etel = $row['Etel'];
    $Ecell = $row['Ecell'];


  }
}

if (isset($_POST['update'])) {	

	$Fname=$_POST['Fname'];
	$Lname=$_POST['Lname'];
	$Unit=$_POST['Unit'];
	$Contact=$_POST['Contact'];
	$Address=$_POST['Address'];
	$Hair=$_POST['Hair'];
	$Eyes=$_POST['Eyes'];
	$Ename=$_POST['Ename'];
	$Relationship=$_POST['Relationship'];
	$Etel=$_POST['Etel'];
	$Ecell=$_POST['Ecell'];
	$Badge = $var;

	echo $Fname;
	echo $Badge;
	echo $Eyes;	
	echo $Ename;
	echo $Relationship;
	echo $Etel;
	echo $Ecell;

  $query = "UPDATE addpersonnel SET Fname = '$Fname',Lname = '$Lname',Unit ='$Unit', Contact = '$Contact', Address = '$Address', Hair = '$Hair', Eyes = '$Eyes', Ename = '$Ename', Relationship = '$Relationship', Etel = '$Etel', Ecell = '$Ecell' WHERE Badge = '$Badge'";

  if(mysqli_query($conn, $query)){
      ?>
<script type="text/javascript">
	
window.location = "personnel.php"

</script>
      <?php
  }else{
    echo "Error ".mysqli_error($conn);
    echo "NOT SAVED";
    ob_clean();
  }
}
?>
</body>
</html>
