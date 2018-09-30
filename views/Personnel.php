<!DOCTYPE html>
<html>
<head>
	<title>PERSONNEL</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/Personnel.css">
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<?php require 'superAdminNavigator.php'; ?>

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
  //  "<td onclick=location.href='updateinfo.php?Badge=".$row['Badge']."'>"."<input type='button' value='UPDATE' name='update'>"."</td>".
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
<?php require 'footer.php' ?>
</body>
</html>