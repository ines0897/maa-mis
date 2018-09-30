<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
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
  margin-top: -20px;
  background-color: white;
  position: absolute;
  top: 180px;
  margin-left: 5px;
    border-collapse: collapse; /* Collapse borders */
    width: 40%;
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
  margin-left: 140px;
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
   font-style: Courier;
}
h2{
  margin-top: -90px;
  margin-left: 700px;
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
    font-style: Courier;
}

#myTable1 {
  margin-top: -20px;
  background-color: white;
  position: absolute;
  top: 180px;
  margin-left: 680px;
  margin-right: 10px;
    border-collapse: collapse; /* Collapse borders */
    width: 50%;
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 15px; /* Increase font-size */
  opacity: 0.8;
  float: left;
}


#myTable1 th, #myTable1 td {
    text-align: center; /* Left-align text */
    padding: 12px; /* Add padding */
}
#myTablex2 td {
    text-align: center; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable1 tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable1 tr.header, #myTable1 tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}



</Style>

<body>


<ul>
  <li><a class="active" href="#home"><img src="home.png"></a></li>
  <li><a href="personnel.php"><img src="personal.png"></a></li>
  <li><a href="leave.php"><img src="leave.png"></a></li>
  <li><a href="duty.php"><img src="reminder.png"></a></li>
  <li style="float: right;"><a href="index.php"><img src="logout.png"></a></li>
</ul>

<h1>Reminder's</h1>


<table id = "myTable">
<tr class="header">
  
     <th style="width:9%;">EVENT</th>
    <th style="width:10%;">MESSAGE</th>
     <th style="width:10%;">DATE</th>
     <th style="width:10%;">DATE TODAY</th>
     <th style="width:10%;">ACTION</th>
    </tr>
    <tr>



<?php
$connect=mysqli_connect('localhost','root','','capstone');

  $sql = " SELECT id , event , message , date , datenow FROM reminders ";

  $recon = mysqli_query($connect, $sql);

      if(mysqli_num_rows($recon) > 0){ // table data start
  while ($row = mysqli_fetch_assoc($recon)) { // loop data startS

    echo 
    "<td>".$row["event"]."</td>".
    "<td>".$row["message"]."</td>".
    "<td>".$row["date"]."</td>".
    "<td>".$row["datenow"]."</td>".
    "<td onclick=location.href='deleteR.php?id=".$row['id']."'><input class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal' type='button' value='delete' name='delete'>"."</td>".

    "</tr>";

   
  } 
}else{
  echo "NO RECORD YET";
}


?>


<h2>ACCEPTED LEAVES</h2>



<table id = "myTable1">
<tr class="header">
  
     <th style="width:10%;">BADGE</th>
    <th style="width:20%;">FULLNAME</th>
     <th style="width:10%;">REASON</th>
     <th style="width:10%;">FROM</th>
     <th style="width:10%;">TO</th>
    </tr>
    <tr>



<?php
$connect=mysqli_connect('localhost','root','','capstone');

  $sql = " SELECT * FROM `acceptedleave` ";

  $recon = mysqli_query($connect, $sql);

      if(mysqli_num_rows($recon) > 0){ // table data start
  while ($row = mysqli_fetch_assoc($recon)) { // loop data startS

    echo 
    "<td>".$row["Badge"]."</td>".
    "<td>".$row["Fullname"]."</td>".
    "<td>".$row["Reason"]."</td>".
    "<td>".$row["Sdate"]."</td>".
    "<td>".$row["Ldate"]."</td>".
  

    "</tr>";

   
  } 
}else{
  echo "NO RECORD YET";
}


?>



</body>
</html>