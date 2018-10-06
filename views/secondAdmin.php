<!DOCTYPE html>
<html>
<head>
	<title>SECOND ADMIN</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/secondAdmin.css">

<body>
<?php
 include ("../function.php");
?>
<?php $root_path = '../' ?>
<?php require 'header.php'; ?>
<center><br>
<div class="col-md-12" id="secondAdmin_main">

<div class="col-md-4 container">
<div class="pane_ panel-primary">
	<a href="RegisterLeave.php">
		<button class="button">
			<strong>REQUEST LEAVE FORM</strong>
				<br><img src="../css/image/leavereg.png">
		</button>
	</a>
</div>
<br><br>
<div class="panel_panel-primary">
	<a href="CreateID.php">
		<button class="button">
			<strong>CREATE ID FORM</strong>
				<br><img src="../css/image/createid.png">
		</button>
	</a>
</div>
</div>
<div class="col-md-4 container">
<div class="panel_panel-primary">
	<a href="Reminder.php">
		<button class="button">
			<strong>REMINDERS</strong>
				<?php $query = "SELECT * from `reminders` where `type` = 'unread' order by `datenow` DESC"; if(count(fetchAll($query))>0){?> 
					<span class="badge badge-light"><?php echo count(fetchAll($query)); ?></span> 
				<?php }    ?>
					<br><img src="../css/image/reminders.png">
		</button>
	</a>  
</div>
<br><br>
<div class="panel_panel-primary">
	<a href="PrintID.php">
		<button class="button">
			<strong>VISITORS ID</strong>
				<br><img src="../css/image/id.png">
		</button>
	</a>  
</div>
</div>
<div class="col-md-4 container">
<div class="panel_panel-primary">
	<a href="RejectAcceptLeave.php">
		<button class="button">
			<strong>Accepted & Rejected Leave</strong>
				
					<br><img src="../css/image/ARLeave.png">
		</button>
	</a>  
</div>
<br><br>
<div class="panel_panel-primary">
	<a href="PrintID.php">
		<button class="button">
			<strong>Create Visiting Report</strong>
				<br><img src="../css/image/id.png">
		</button>
	</a>  
</div>
</div>

</div>

 <a id="logout"><br><br>
 	<button>LOG-OUT</button>
 </a>

  	<script type="text/javascript">
	$('#logout').on('click', function(e) {
		$.ajax({
		  url: "../services/api/logoutService.php",
		  method: 'GET',
		  accepts: "application/json; charset=utf-8",
		  success: function() {
		  	redirectUrl('');
		  },
		  error: function() {
		  	swal('Something went wrong');
		  },
		})
	});
</script>
<?php require 'footer.php'; ?>

</body>
</html>