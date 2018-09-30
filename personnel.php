<!DOCTYPE html>
<html>
<head>
	<title>PERSONNEL</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
<Style>
	body{
			background-image: url("w.png");
			background-repeat: repeat;
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
	
	


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f3f3f3;
    margin-top: -10px;
    margin-left: -11px;
    margin-right: -7px;
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
    color :#f3f3f3;
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
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 40%;
    margin-left: -20px;
}
input[type=button] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 7px;

}
    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: 10px;
    opacity: 0.8;

}
img{
  height: 50px;
  width: 50px;
  margin-top: -20px;
}


</Style>

<body>


<ul>
  <li><a  href="admin.php"><img src="home.png"></a></li>
  <li><a class="active" href="personnel.php"><img src="personal.png"></a></li>
  <li><a href="leave.php"><img src="leave.png"></a></li>
  <li><a href="duty.php"><img src="reminder.png"></a></li>
  <li style="float: right;"><a href="index.php"><img src="logout.png"></a></li>
</ul>

<br><br>
<form>
 
  
 <a href="addpersonnel.php"> <input type="button" value="Add personnel"></a>
</form>

<div class="uloltable">
<table id = "myTable">
<tr class="header">
  
     <th style="width:20%;">BADGE NO.</th>
    <th style="width:40%;">LAST NAME</th>
     <th style="width:20%;">FIRST NAME</th>
     <th style="width:20%;">UNIT</th>
     <th style="width:20%;">CONTACT</th>
     <th style="width:20%;">ACTION</th>
    </tr>
    <tr>

     <input type="text" id="myInput" onkeyup="myFunction()" placeholder="First Name , Last Name , Badge no." >

<?php
session_start();
  $connect=mysqli_connect('localhost','root','','capstone');

  $sql = " SELECT Fname , Lname , Badge , Unit , Contact FROM addpersonnel";

  $recon = mysqli_query($connect, $sql);

      if(mysqli_num_rows($recon) > 0){ // table data start
  while ($row = mysqli_fetch_assoc($recon)) { // loop data start

    echo 
    "<td>".$row["Badge"]."</td>".
    "<td>".$row["Fname"]."</td>".
    "<td>".$row["Lname"]."</td>".
    "<td>".$row["Unit"]."</td>".
    "<td>".$row["Contact"]."</td>".
    "<td onclick=location.href='updateinfo.php?Badge=".$row['Badge']."'>"."<input type='button' value='UPDATE' name='update'>"."</td>".
    "<td onclick=location.href='personnelview.php?Badge=".$row['Badge']."'>"."<input type='button' value='VIEW' name='view'>"."</td>".
  
    "</tr>";

   
  } 
}


?>
</table>
</div>
<script>
function myFunction(){

var input , fname , lname , badge , tr , td , i , filter,table;
input = document.getElementByID("myInput");
 filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

 for (i = 0; i < tr.length; i++) {
    //Column 1
    td_1 = tr[i].getElementsByTagName("td")[0];
    //Column 2
    //td_2 = tr[i].getElementsByTagName("td")[1];
    //td_3 = tr[i].getElementsByTagName("td")[2];
    if (td_1) {
      if (td_1.innerHTML.toUpperCase().indexOf(filter) > -1 ) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}


}

</script>
</body>

</html>