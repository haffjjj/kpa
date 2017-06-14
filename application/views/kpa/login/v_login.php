<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Now!</title>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div class="container-fluid" style="padding-right: 0px;">
		<div class="col-md-6">
			<div class="col-sm-offset-1" style="margin-top:220px;">
				<img src="<?php echo base_url(); ?>assets/img/logo.png" width="30%" style="margin-bottom:30px;">
				<div style="font-style:italic; margin-top:30px;">
					<h4>Lorem Ipsum  dolor sit amet,<br> 
						consectetur, adipisci velit</h4>
					</div>
					<div style="margin-left:0px;">
						<p>Etiam placerat aliquet cursus. Cras eget gravida nisi, quis malesuada urna.<br>
							Integer at nulla odio. Pellentesque sodales vehicula risus a dapibus.<br> 
							Mauris sed maximus felis, ut volutpat ligula.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 bas" style="height: 672px;">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="panel panel-default" style="margin-top: 212px; margin-bottom:213px;border-radius: 40px;box-shadow: 5px 5px; color:#602869">
							<div class="panel-body" >
								<form method="post" action="<?php echo base_url('login/log_in');?>">
									<div style="font-style:normal;" class="form-group kotak">
										<div class="col-md-12">
											<label for="username">NIK</label>
											<input type="text" class="form-control" name="nik" id="username" required style="border-radius: 30px;"></input>
										</div>
									</div>

									<div class="form-group kotak password">
										<div class="col-md-12">

											<label for="password" class="password">Password</label>
											<input type="password" name="password" class="form-control" id="password" required style="border-radius: 30px;"></input>
										</div>
									</div>
									<div class="col-sm-4 col-sm-offset-8 kotak" style="margin-top:10px">
										<button type="submit" class="btn login" style="background-color:#42e200; border-radius: 50px; font-size: 12px;font-family: Arial;font-style: italic; color:#ffffff;">Login</button>
									</div>
								</form>
								<?php
								if($this->session->flashdata('pesan') <> ''){
									?>
									<div class="alert alert-dismissible alert-danger">
										<?php echo $this->session->flashdata('pesan');?>
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</html>