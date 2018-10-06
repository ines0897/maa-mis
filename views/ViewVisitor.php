
<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","capstone");
    
    // mysql search query
    $query = "SELECT  `id`, `image`, `name`, `age`, `address`, `ce` FROM `images1` WHERE `id` = $id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
      	
      	$id = $row['id'];
        $image = $row['image'];
        $name = $row['name'];
        $age = $row['age'];
        $address = $row['address'];
        $cp = $row['ce'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
        	$id ="";
            $image ="";
            $name = "";
            $age = "";
            $address = "";
            $cp="";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
	
    $id ="";
    $image =""; 
    $name = "";
    $age = "";
    $address = "";
    $cp="";
}

if(isset($_POST['save'])){
	include 'function.php';
	$query = "INSERT INTO `visit` (`id`, `name`, `age`, `address`, `date`) VALUES ('$id', '$name', '$age', 'address',current_timestamp)";

	    if(count(fetchall($query))>0){
	foreach(fetchAll($query) as $row){
		$image = $row['image'];
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $address = $row['address'];

            if($query){
            	echo "123";
            }else{
            	echo "shit";
            }
            
        }
}else{
	echo "error ";
}
}



?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/ViewVisitor.css">
<body>
<form method="POST"  enctype="multipart/form-data">
<center>
<pre class="pic">	
<?php echo "<img id='image' src='../image/".$image." '/>"  ?>
</pre></center>
<pre class="field">
                ID:      <input type="text" name="id" value="<?php echo $id;?>"><br>
                NAME:    <input type="text" name="name1" value="<?php echo $name;?>" disabled><br><br>
                AGE:     <input type="del" name="age" value="<?php echo $age;?>" disabled><br><br>
                ADDRESS: <input type="text" name="address" value="<?php echo $address;?>" disabled><br><br>
                CELL NO: <input type="del" name="cp_no" value="<?php echo $cp;?>" disabled><br><br>
                <input type="submit" name="search">
</pre><br><br>


</body>
</html>