<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/VisitorsInfo.css">
<body>

<?php

 include ("../../function.php");

$con=mysqli_connect('localhost','root','','capstone');
  	  $msg ="";

  if(isset($_POST['submit'])){

    $target ="../../image/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    $name1 = $_POST['name1'];
    $age = $_POST['age'];
    $address=$_POST['address'];
    $cp_no=$_POST['cp_no'];

    $sql = "INSERT INTO `images1` (`image`, `name`, `age`, `address`, `ce`) VALUES ('$image', '$name1', '$age', '$address', '$cp_no')";

    mysqli_query($con,$sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg = "<script>image uploaded succesfully</script>";
    }else{
        $msg = "<script>there was a problem</script>";
    }
}

?>

<?php  
require '../../conn.inc.php';

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
echo "<center><img id='img1' src ='../../image/".$row["image"]."'>";
?><br>
ID:				 <input type="text" name="id" value="<?php echo $id;?>" disabled><br>
NAME: 			 <input type="text" name="name" value="<?php echo $name;?>" disabled><br>
AGE: 			 <input type="text" name="age" value="<?php echo $age;?>" disabled><br>
ADDRESS:		 <input type="text" name="address" value="<?php echo $address;?>" disabled><br>
CONTACT NO: 	 <input type="text" name="contact" value="<?php echo $contact;?>" disabled> <br>
<br>



</pre>
</form>
<?php 
require_once('vendor/autoload.php'); 

/* Start to develop here. Best regards https://php-download.com/ */

// include('src/BarcodeGenerator.php');
// include('src/BarcodeGeneratorPNG.php');
// include('src/BarcodeGeneratorSVG.php');
// include('src/BarcodeGeneratorJPG.php');
// include('src/BarcodeGeneratorHTML.php');
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode('$id', $generator::TYPE_CODE_128);
?>
<br>
<a titlt ="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor:pointer;"><input type="submit" name="print" value="PRINT"></a>

<?php require '../../views/footer.php' ?>
</body>
</html>






