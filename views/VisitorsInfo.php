<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/VisitorsInfo.css">
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<?php  
require '../conn.inc.php';

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
<!-- <form method="POST"> -->
<pre>
<?php
echo "<center><img id='img1' src ='../image/".$row["image"]."'>";
?><br>
ID:		         <input type="text" name="id" value="<?php echo $id;?>" readonly><br>
NAME: 			 <input type="text" name="name" value="<?php echo $name;?>" readonly><br>
AGE: 			 <input type="text" name="age" value="<?php echo $age;?>" readonly><br>
ADDRESS:		 <input type="text" name="address" value="<?php echo $address;?>" readonly><br>
CONTACT NO: 	          <input type="text" name="contact" value="<?php echo $contact;?>" readlonly> <br>

<?php 
require_once('../try/vendor/autoload.php'); 

/* Start to develop here. Best regards https://php-download.com/ */

// include('src/BarcodeGenerator.php');
include('../try/vendor/picqer/php-barcode-generator/src/BarcodeGeneratorPNG.php');
// include('src/BarcodeGeneratorSVG.php');
// include('src/BarcodeGeneratorJPG.php');
// include('src/BarcodeGeneratorHTML.php');
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
echo '<img src="data:image/png;base64,' .base64_encode($generator->getBarcode($id,$generator::TYPE_CODE_128)).'">';
?>
<br>
<a titlt ="print screen" alt="print screen" onclick="window.print();" target="_blank" style="cursor:pointer;"><input type="submit" name="print" value="PRINT"></a>

</pre>
<!-- </form> -->

<?php require 'footer.php' ?>
</body>
</html>