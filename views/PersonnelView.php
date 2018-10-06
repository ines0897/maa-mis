<!DOCTYPE html>
<html>
<head>
	<title>PERSONNELS DATA</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/PersonnelView.css">
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>

<?php  
require '../conn.inc.php';

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
    $Pbirth = $row['Pbirth'];
    $Dbirth = $row['Dbirth'];
    $Gender = $row['Gender'];
    $Address = $row['Address'];
    $Spouse = $row['Spouse'];
    $Occupation = $row['Occupation'];
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
<a href="UpdatePersonnel.php?Badge=<?php echo $row['Badge']?>" class="edit1"><img class="edit" src="../css/image/edit.png"></a>

  <form method="POST">
   <label> BADGE NO.:</label>
    <input type="number" name="Badge" id="Badge" value="<?php echo $Badge;?>" readonly>
    <label for="fname">FIRST NAME:</label>										      <label for="lname">LAST NAME:</label>
    <input type="text" id="fname" name="Fname" value="<?php echo $Fname;?>" readonly>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="lname" name="Lname" value="<?php echo $Lname;?>" readonly>

    <label for="unit">UNIT/REGION:</label>
    <input type="text" id="unit" name="Unit" value="<?php echo $Unit;?>" readonly> 

    <label for="contact">CONTACT NO.</label>  									      <label for="Pbirth">PLACE OF BIRTH</label>
    <input type="text" name="Contact" id="Contact" value="<?php echo $Contact;?>" readonly>                 <input type="text" name="Pbirth" id="Pbirth" value="<?php echo $Pbirth;?>" readonly> 
        
    <label for="birth">DATE OF BIRTH:</label>                                                            		      <label for="gender">GENDER:</label>
    <input type="text" name="Dbirth" id="Dbirth" value="<?php echo $Dbirth;?>" readonly>                 <input type="text" id="Gender" name="Gender" value="<?php echo $Gender;?>" readonly>
    

    <label for="comment">ADDRESS:</label>
    <input type="text" id="address" name="Address" style="color: black" value="<?php echo $Address;?>" readonly>
    
    <label for="hair">COLOR OF THE HAIR</label>                                                                    	<label for="eyes">COLOR OF THE EYES</label>
    <input type="text" name="Hair" id="Hair" value="<?php echo $Hair;?>" readonly>                  <input type="text" name="Eyes" id="Eyes" value="<?php echo $Eyes;?>" readonly> 
     
    <label for="spouse">NAME OF SPOUSE:</label>                                                                            <label for="occu">OCCUPATION:</label>
    <input type="text" name="Spouse" id="Spouse" value="<?php echo $Spouse;?>" readonly>                  <input type="text" name="Occupation" id="Occupation" value="<?php echo $Occupation;?>"  readonly>
    
  
    

    <p> EMERGENCY CONTACT </p>

    <label for="ename">NAME:</label>
    <input type="text" id="ename" name="Ename" value="<?php echo $Ename;?>" readonly> 
    <label for="relationship">RELATIONSHIP:</label>
    <input type="text" id="relationship" name="Relationship" value="<?php echo $Relationship;?>" readonly>
    <br>
    <label for="tele">TELEPHONE:</label>
    <input type="tel" id="tele" name="Etel" maxlength="10" value="<?php echo $Etel;?>" readonly>
    <label for="cell">CELL:</label>
    <input type="tel" id="cell" name="Ecell" maxlength="11" value="<?php echo $Ecell;?>" readonly>

    <br><br>
<center>
    
    <a class="back" href="personnel.php">BACK</a>
</center>
    </form>

</div>
</pre>


<?php require 'footer.php' ?>
</body>
</html>