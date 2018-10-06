<ul>
  <li><a class="active" href="superAdmin.php"><img src="../css/image/home.png"></a></li>
  <li><a href="Personnel.php"><img src="../css/image/personal.png"></a></li>
  <li><a href="Leave.php"><img src="../css/image/leave.png"></a></li>
  <li><a href="Duty.php"><img src="../css/image/reminder.png"></a></li>
  <li style="float: right;">
  	<a id="logout">
  		<img src="../css/image/logout.png">
  	</a>
  </li>
</ul>

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