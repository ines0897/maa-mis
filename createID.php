<!DOCTYPE html>
<html>
<head>
<link href="barcode_style.css" type="text/css" rel="stylesheet"/>
	<title></title>
</head>
<style>
	body{     

			background-image: url("w.png");
			background-repeat:repeat;


		}
	div {
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
    width: 70%;
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
    width: 70%;
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
input[type=file] {
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0px;
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
img{
    height: 100px;
    width: 100px;
    margin-top: 40px;
}
.field{
    margin-left: -150px;
}
a:link, a:visited {
  background-color: #4CAF50;
    color: white;
    padding: 11px 20px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    width: 86%;
    border-radius: 4px;
    cursor: pointer;
}

</style>
<?php

?>

<body>
<center>  <h1> CREATE VISITOR'S ID </h1> </center>
<div>
<form method="POST" action="generate_barcode.php" enctype="multipart/form-data">
<center>
<pre class="pic">	
<img src="addphoto.png">
<input type="file" name="image">
</pre></center>
<pre class="field">
                NAME:    <input type="text" name="name1" required>
                AGE:     <input type="del" name="age" required>
                ADDRESS: <input type="text" name="address" required>
                CELL NO: <input type="del" name="cp_no" required>
</pre><br><br>
     <input type="submit" name="submit" id="submit" value="SUBMIT">
    <a href="admin2.php">BACK</a>

	
</form>	
</pre>
</div>
</body>
</html>