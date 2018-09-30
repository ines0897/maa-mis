<ul>
  <li><a class="active" href="#home"><img src="../home.png"></a></li>
  <li><a href="personnel.php"><img src="../personal.png"></a></li>
  <li><a href="leave.php"><img src="../leave.png"></a></li>
  <li><a href="duty.php"><img src="../reminder.png"></a></li>
  <li style="float: right;">
  	<a id="logout">
  		<img src="../logout.png">
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