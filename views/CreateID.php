<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="../barcode_style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="../css/CreateID.css">

<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<body>
<?php

?>

<body>
<center>  <h1> CREATE VISITOR'S ID </h1> </center>
<div class="div">
<form method="POST" action="ViewID.php" enctype="multipart/form-data">
<center>
<pre class="pic">	
<img src="../css/image/addphoto.png">
<input type="file" name="image">
</pre></center>
<pre class="field">
                NAME:    <input type="text" name="name1" required>
                AGE:     <input type="del" name="age" required>
                ADDRESS: <input type="text" name="address" required>
                CELL NO: <input type="del" name="cp_no" required>
</pre><br><br>
     <input type="submit" name="submit" id="submit" value="SUBMIT">
    <a class="back" href="secondAdmin.php">BACK</a>

<?php require 'footer.php' ?>
</body>
</html>