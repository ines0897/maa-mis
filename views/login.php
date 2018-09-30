<?php require 'header.php'; ?>

<style type="text/css" src="../css/login.css"></style>

<div class="login">
	<div class="logo">
		<?php
			echo "<img src='assets/images/bjmp-logo.png'"; 
		 ?>
		<!-- <img src="/assets/images/bjmp-logo.png"> -->
	</div>
	<?php die($GLOBALS['base_dir']); ?>
	<div class="main-form">
		<form action="" method="POST" role="form" class="form">
			<div class="form-field">
		    	USERNAME: <input type="text" name="id" required>
			</div>
			<div class="form-field">
		    	PASSWORD: <input type="password" name="pass" required>
			</div>
			<div class="form-field">
		    	TYPE:  <input type="radio" name="type" value="sadmin">SUPER ADMIN <input type="radio" name="type" value="admin">ADMIN
			</div>
			<div class="form-field">
		    	<input type="submit" name="submit" value="LOGIN">
			</div>
		</form>
	</div>
</div>

<?php require 'footer.php'; ?>