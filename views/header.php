<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path; ?>css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path; ?>css/vendor/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $root_path; ?>assets/stylesheets/style.css">

	<script type="text/javascript" src="<?php echo $root_path; ?>js/vendor/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $root_path; ?>js/vendor/sweetalert.min.js"></script>

	<!-- global services -->
	<script type="text/javascript" src="<?php echo $root_path; ?>js/globalService.js"></script>

	<?php session_start(); ?>
	<?php
		if (!isset($is_login_page) && !isset($_SESSION['token'])) {
			header("location:../index.php");
		} elseif (isset($is_login_page) && isset($_SESSION['mainUrl'])) {
			header("location:".$_SESSION['mainUrl']);
		}
	?>
</head>
<body>

