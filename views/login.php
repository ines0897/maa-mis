<?php $is_login_page = true; ?>
<?php require 'header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/login.css">

<div class="login col-md-12">
	<div class="container logo col-md-5 no-bg">
		<?php
			echo "<img class='logo' src='assets/images/bjmp-logo.png' />"; 
		 ?>
	</div>
	<div class="container col-md-1 no-bg"></div>
	<br><br><br>
	<div class="container main-form col-md-6">
		<div class="form">
		<center>
			<div class="form-field">
		    	USERNAME: <input type="text" id="id" required>
			</div>
			<div class="form-field">
		    	PASSWORD: <input type="password" id="pass" required>
			</div>
			<div class="form-field">
		    	<button class="submit" id="login">LOGIN</button>
			</div>
		</center>
		</div>
	</div>
</div>
<script>

	const loginError = function() {
		swal({
		  type: 'error',
		  title: 'Oops...',
		  text: 'Login error!',
		});
	}

	$('#login').on('click', function(e) {
		const id = $('#id').val();
		const pass = $('#pass').val();

		$.ajax({
		  url: "services/api/loginService.php",
		  data: {
		  	id,
		  	pass,
		  },
		  method: 'POST',
		  accepts: "application/json; charset=utf-8",
		  success: function( result ) {
		  	if (!result) {
		  		loginError();
		  		return;
		  	}
		  	const data = JSON.parse(result);

		  	if (!data || !data.length || !data[0].success || !data[0].url) {
		  		loginError();
		  		return;
		  	}

		  	redirectUrl(data[0].url);
		  },
		  error: function(err) {
		  	loginError();
		  },
		})
	});
</script>
<?php require 'footer.php'; ?>