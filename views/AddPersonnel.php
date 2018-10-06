<!DOCTYPE html>
<html>
<head>
	<title>ADD PERSONNEL</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/AddPersonnel.css">
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<pre class="border">  PERSONNEL'S INFORMATION:</pre>
<pre>
	<div>
  <form action="" method="POST">
    <label for="fname">FIRST NAME:</label>                                  					      <label for="lname">LAST NAME:</label>
    <input type="text" id="fname" name="fname" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="lname" name="lname" required>

    <label for="badge">BADGE NO.:</label>                                                                                <label for="unit">UNIT/REGION:</label>
    <input type="text" id="badge" name="badge" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="unit" name="unit" required>

    <label for="contact">CONTACT NO.</label>                                                                  	      <label for="place">PLACE OF BIRTH</label>                                      
    <input type="text" name="contact" id="contact" required>                 <input type="text" name="place" id="place" required>

    <label for="birth">DATE OF BIRTH:</label>                                                                            <label for="gender">GENDER:</label>
    <input type="date" name="birth" id="birth" required>                 <select id="gender" name="gender" required>
      <option value="male">MALE</option>
      <option value="female">FEMALE</option>
    </select>

    <label for="comment">ADDRESS:</label>
    <input type="text" id="address" name="address" style="color: black" required>
    
    <label for="hair">COLOR OF THE HAIR</label>                                                                         <label for="eyes">COLOR OF THE EYES</label>
    <input type="text" name="hair" id="hair" required>                 <input type="text" name="eyes" id="eyes" required>

    <label for="spouse">NAME OF SPOUSE:</label>                                                                           <label for="occu">OCCUPATION:</label>
    <input type="text" name="spouse" id="spouse" required>                 <input type="text" name="occu" id="occu" required>
    
    
  
    

    <p> EMERGENCY CONTACT </p>

    <label for="ename">NAME:</label>
    <input type="text" id="ename" name="ename" required>
    <label for="relationship">RELATIONSHIP:</label>
    <input type="text" id="relationship" name="relationship" required>
    <br>
    <label for="tele">TELEPHONE:</label>
    <input type="tel" id="tele" name="tele" maxlength="10" required> 
    <label for="cell">CELL:</label>
    <input type="tel" id="cell" name="cell" maxlength="11" required>
    
  <br><br><br>
<center>    <input type="submit" value="Submit"  name="input"> </center>
  </form>
</div>
</pre>
<?php
      
    $con=mysqli_connect('localhost','root','','capstone');


    if(isset($_POST['input'])){
        $Fname=$_POST['fname'];
        $Lname=$_POST['lname'];
        $Badge=$_POST['badge'];
        $Unit=$_POST['unit'];
        $Contact=$_POST['contact'];
        $Place=$_POST['place'];
        $Birth=$_POST['birth'];
        $Gender=$_POST['gender'];
        $Address=$_POST['address'];
        $Hair=$_POST['hair'];
        $Eyes=$_POST['eyes'];
        $Spouse=$_POST['spouse'];
        $Occu=$_POST['occu'];
        $Ename=$_POST['ename'];
        $Relationship=$_POST['relationship'];
        $Tele=$_POST['tele'];
        $Cell=$_POST['cell'];

        $sql = "INSERT INTO addpersonnel(Fname,Lname,Badge,Unit,Contact,Pbirth,Dbirth,Gender,Address,Hair,Eyes,Spouse,Occupation,Ename,Relationship,Etel,Ecell) values('$Fname','$Lname','$Badge','$Unit','$Contact','$Place','$Birth','$Gender','$Address','$Hair','$Eyes','$Spouse','$Occu','$Ename','$Relationship','$Tele','$Cell')";
    

        $result=mysqli_query($con,$sql);
        
        if($result){
            ?><script type="text/javascript">
                window.location = "personnel.php";
            </script>

            <?php
        }
}
?>
<?php require 'footer.php' ?>
</body>
</html>