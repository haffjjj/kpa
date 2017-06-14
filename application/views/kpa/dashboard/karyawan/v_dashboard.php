<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Karyawan</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/style-dashboard-karyawan.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header" class="col-sm-12" style="">
		<div style="margin-top:30px;" class="col-sm-10 col-sm-offset-1">
			<div style="float:left; margin-right:15px;">
				<img style="border-radius:50%;" src="<?php echo base_url(); ?>assets/img/profil.jpg" width="80px" height="80px"/>
			</div>
			<div style="margin-bottom:10px;">
				<div>
					<h4><?php echo $username;?></h4>
				</div>
				<div style="font-size:12px;">
					<p><?php echo $level;?></p>
					<p><a style="color:white;" href="<?php echo base_url("login/sign_out");?>">
						Sign Out</a></p>
					</div>
				</div>
				<div style="clear:left;">
					<form method="POST" action="<?php echo base_url();?>karyawan/search">
						<div class="search">
							<p>Project</p>
							<input value="<?php echo $in_project ?>" name="project" class="form-control" type="text" size="23">
						</div>
						<div class="search">
							<p>TW</p>
							<input value="<?php echo $in_tw?>" name="tw" class="form-control" type="text" size="10">
						</div>
						<div class="search">
							<p>Tahun</p>
							<input value="<?php echo $in_tahun ?>" name="tahun" class="form-control" type="text" size="10">
						</div>
						<div class="search">
							<p>Anggaran</p>
							<input value="<?php echo $in_anggaran ?>" name="anggaran" class="form-control" type="text" size="13">
						</div>
						<div class="search">
							<p>Jenis Kegiatan</p>
							<input value="<?php echo $in_jenis_kegiatan ?>" name="jenis-kegiatan" class="form-control" type="text" size="23">
						</div>
						<b><input class="submit" type="submit" value="Search" size="20"></b>
					</form>
				</b>
			</div>
		</div>
	</div>

