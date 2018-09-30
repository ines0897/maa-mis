<?php
session_start();
 include ("function.php");

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




   

/*
 $text=rand();

 $name=$_POST['name1'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $cpno=$_POST['cp_no'];
 echo "<br>";
 echo "<br>";
 echo "Name: ".$name;
 echo "<br>";
 echo "Age: ".$age;
 echo "<br>";
 echo "Address: ".$address;
 echo "<br>";
 echo "Cellphone: ".$cpno;
 echo "<br>";
  echo "<br>";
 echo "<center><img src='barcode.php?codetype=Code39&size=40&text=".$name."&print=true'/>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "</center>"; 
*/
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
</head>
<style>
body{
    height: 684px;
    background: linear-gradient(maroon,black);
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
    height: 500px;
    width: 500px;
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
img{
  height: 50px;
  width: 50px;
  margin-top: -20px;
}
#myTable {
  margin-top: -140px;
  background-color: white;
  position: absolute;
  top: 230px;
  margin-left: 5px;
    border-collapse: collapse; /* Collapse borders */
    width: 100%;
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 15px; /* Increase font-size */
  opacity: 0.8;
}

#myTable th, #myTable td {
    text-align: center; /* Left-align text */
    padding: 12px; /* Add padding */
}
#myTablex2 td {
    text-align: center; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
h1{
  margin-left: 180px;
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
}
h2{
  margin-top: -70px;
  margin-left: 900px;
   letter-spacing: 4px;
   font-size: 30px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url("searchicon.png");  
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
 
}
img{
  height: 60px;
  width: 60px;
  margin-top: 10px;
  border-radius: 5px;
}
a:link, a:visited {
  background-color: #4CAF50;
    color: white;
    padding: 11px 20px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    width: 20%;
    margin-top: 20px;
    float:right;
    border-radius: 4px;
    cursor: pointer;
}
  
</style>
<body>
<a href="admin2.php">BACK</a>

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
     "<td><img src ='images/".$row["image"]."'</td>".
     "<td>".$row["name"]."</td>".
     "<td>".$row["age"]."</td>".
     "<td>".$row["address"]."</td>".
     "<td>".$row["ce"]."</td>".
     "<td onclick=location.href='printID.php?id=".$row['id']."'>"."<input type='button' value='print' name='print'>"."</td>".
      "<tr>";


    }

    ?>


</body>


 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</html>