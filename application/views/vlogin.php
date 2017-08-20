<?php
defined('BASEPATH') OR exit ('No directscript acccess allowed')
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/font-awsome/css/font-awsome.min.css">
	<style type="text/css">
		body{
			margin-top: 0;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm12 col-md-4"></div>
		<div class="col-sm12 col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><strong>Login Bootstrap</strong></div>
				<div class="panel-body">
				<form role="form" action="<?php echo base_url();?>login/cek" method="post">
					<fieldset>
						<div class="row">
							<div class="center-block">
							<img src="" class="profile-img">
					</fieldset></div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>