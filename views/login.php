<?php $is_login_page = true; ?>
<?php require 'header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/login.css">
<?php echo ($_SESSION && $_SESSION['token']) ?>
<div class="login col-md-12">
	<div class="container logo col-md-5">
		<?php
			echo "<img src='assets/images/bjmp-logo.png' />"; 
		 ?>
	</div>
	<div class="container col-md-1 no-bg"></div>
	<div class="container main-form col-md-6">
		<div class="form">
			<div class="form-field">
		    	USERNAME: <input type="text" id="id" required>
			</div>
			<div class="form-field">
		    	PASSWORD: <input type="password" id="pass" required>
			</div>
			<div class="form-field">
		    	<button class="submit" id="login">LOGIN</button>
			</div>

			

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