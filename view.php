<?php
session_start();
 include("function.php");
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
	div{
    width: 80%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: 10px;
    opacity: 0.8;
}

	.pic{
		border-color: grey;
		border-style: solid;
		border-radius: 40px;
		height: 300px;
		width: 300px;
	}
	input[type=text],select {
    width: 190%;
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
input[type=del], select {
    width: 190%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
    float: left;
    margin-top: -80px;
  }

input[type=submit]:hover {
    background-color: #45a049;
}

    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-top: -20px;
    margin-left: 60px;
    opacity: 0.8;

}
form{
	font-family: courier;
	font-size: 20px;
}
		h1{
	margin-bottom: 20;
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;

}
#myTable {
  margin-top: -50px;
  background-color: white;
  position: absolute;
  top: 180px;
  margin-left: -2px;
    border-collapse: collapse; /* Collapse borders */
    width: 99%;
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
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

</style>
<body>
<center>  <h1> REMINDER'S </h1> </center>

<table id = "myTable">
<tr class="header">
  
     <th style="width:20%;">EVENT</th>
    <th style="width:40%;">MESSAGE</th>
     <th style="width:20%;">DATE</th>
     <th style="width:20%;">DATE TODAY</th>
    </tr>
    <tr>



<?php
$connect=mysqli_connect('localhost','root','','capstone');

  $sql = " SELECT event , message , date , datenow FROM reminders ";

  $recon = mysqli_query($connect, $sql);

      if(mysqli_num_rows($recon) > 0){ // table data start
  while ($row = mysqli_fetch_assoc($recon)) { // loop data start

    echo 
    "<td>".$row["event"]."</td>".
    "<td>".$row["message"]."</td>".
    "<td>".$row["date"]."</td>".
    "<td>".$row["datenow"]."</td>".

    "</tr>";

   
  } 
}


?>

<dv>
  <a href="admin2.php"><input type="submit" name="back" id="back" value="BACK"></a>
</dv>

</body>
</html>