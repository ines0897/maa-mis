<!DOCTYPE html>
<html>
<head>
	<title>ADD PERSONNEL</title>
</head>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
<style>
	body{
		background-image: url("w.png");

	}

	.border{
		opacity: 0.6;
		margin-top:-10px;
		margin-left: -11px;
		background-color: grey;
		border-color: grey;
		height: 70px;
		width: 1350px;
		font-size: 50px;
		font-family: courier;
		font-weight: bolder;

	}
	p{
		letter-spacing: 3px;
		font-size: 20px;
	}
	h1{
		color: white;
		margin-left: 40px;
	}

input[type=text],select {
   	width: 40%;
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
input[type=number], select {
   	width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=tel], select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: -20px;
    opacity: 0.8;

}
  
pre{
    font-family: lucida;
}


</style>

<body>
<pre class="border">  PERSONNEL'S INFORMATION:</pre>
<pre>
	<div>
  <form action="" method="POST">
    <label for="fname">FIRST NAME:</label>                                                                                                                                                                       <label for="lname">LAST NAME:</label>
    <input type="text" id="fname" name="fname" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="lname" name="lname" required>

    <label for="badge">BADGE NO.:</label>                                                                                                                                                                          <label for="unit">UNIT/REGION:</label>
    <input type="text" id="badge" name="badge" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="unit" name="unit" required>

    <label for="contact">CONTACT NO.</label>                                                                                                                                                                      <label for="place">PLACE OF BIRTH</label>                                      
    <input type="text" name="contact" id="contact" required>                  <input type="text" name="place" id="place" required>

    <label for="birth">DATE OF BIRTH:</label>                                                                                                                                                                  <label for="gender">GENDER:</label>
    <input type="date" name="birth" id="birth" required>                  <select id="gender" name="gender" required>
      <option value="male">MALE</option>
      <option value="female">FEMALE</option>
    </select>

    <label for="comment">ADDRESS:</label>
    <input type="text" id="address" name="address" required>
    
    <label for="hair">COLOR OF THE HAIR</label>                                                                                                                                                          <label for="eyes">COLOR OF THE EYES</label>
    <input type="text" name="hair" id="hair" required>                  <input type="text" name="eyes" id="eyes" required>

    <label for="spouse">NAME OF SPOUSE:</label>                                                                                                                                                                <label for="occu">OCCUPATION:</label>
    <input type="text" name="spouse" id="spouse" required>                  <input type="text" name="occu" id="occu" required>
    
    
  
    

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
</body>
</html>