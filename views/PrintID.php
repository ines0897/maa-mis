<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/printID">
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<?php

 include ("../function.php");

$con=mysqli_connect('localhost','root','','capstone');
  	  $msg ="";



  if(isset($_POST['submit'])){

    $target ="images/".basename($_FILES['image']['name']);
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

  <a href="secondAdmin.php" ><img class="back"  src="../css/image/back.png"></a>

<table id = "myTable">
<tr class="header">
  
     <th style="width:20%;">PICTURE</th>
    <th style="width:20%;">NAME</th>
     <th style="width:20%;">AGE</th>
     <th style="width:20%;">ADDRESS TODAY</th>
     <th style="width:20%;">CONTACT NO</th>
     <th style="width:20%;">PRINT</th>
    </tr>
    <tr>
<?php

$con=mysqli_connect('localhost','root','','capstone');
 $sql= "SELECT * FROM images1";
      $result = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($result)) {
    
   /*     echo "<img src='image/".$row['image']."' >";
        echo "<p>"."NAME:".$row['name']."<br><br>"."AGE:".$row['age']."<br><br>"."ADDRESS:".$row['address']."<br><br>"."CONTACT NO:".$row['ce']."</p>";*/

    echo
    "<tr>".
     "<td><img src ='../images/".$row["image"]."'</td>".
     "<td>".$row["name"]."</td>".
     "<td>".$row["age"]."</td>".
     "<td>".$row["address"]."</td>".
     "<td>".$row["ce"]."</td>".
     "<td onclick=location.href='VisitorsInfo.php?id=".$row['id']."'>"."<input type='button' value='print' name='print'>"."</td>".
      "<tr>";
  }
    ?>

<?php require 'footer.php' ?>
</body>
</html>