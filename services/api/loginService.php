<?php 
	session_start();
	function generateToken($mainUrl) {
		$_SESSION['token'] = md5(uniqid(rand(), true));
		$_SESSION['mainUrl'] = $mainUrl;
	}


	$con = mysqli_connect('localhost', 'root', '', 'capstone');

	$id = $_POST['id'];
	$pass = $_POST['pass'];

  	$sql = "SELECT * FROM cap WHERE ID='$id' and PASSWORD='$pass' ";

  	$result = mysqli_query($con,$sql);
  	$rows = mysqli_num_rows($result);
  	
  	$return = array();
  	if ($result) {
	  	while ($row = mysqli_fetch_array($result)) {
	  		if($row['ID']==$id && $row['PASSWORD']==$pass && $row['adminID']== 'sadmin') {
	  			$mainUrl = 'views/superAdmin.php';
	  			$return[0] = array('success' => true, 'url' => $mainUrl);
	  			generateToken($mainUrl);
	    	} elseif ($row['ID']==$id && $row['PASSWORD']==$pass && $row['adminID']== 'admin') {
	    		$mainUrl = 'admin2.php';
	    		$return[0] = array('success' => true, 'url' => $mainUrl);
	    		generateToken($mainUrl);
	    	} else {
	    		$return[0] = array('success' => false);
		    }

		    echo json_encode($return);
		    die();
		}
  	} else {
  		$return[0] = array('success' => false);
  		echo json_encode($return);
		die();
  	}
?>