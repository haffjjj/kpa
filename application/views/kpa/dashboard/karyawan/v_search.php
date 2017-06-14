<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/style-search.css" rel="stylesheet" type="text/css">
</head>
<body >
	<div class="wrapper">
		<div class="col-sm-2 col-sm-offset-5 user">
			<img style="border-radius:50%;" src="<?php echo base_url(); ?>assets/img/profil.jpg" width="150px" height="150px"/>
			<h3><?php echo $username; ?></h3>
			<h4><?php echo $position; ?></h4>
			<hr>
			<h5><a href="<?php echo base_url("login/keluar");?>">Sign Out</a></h5>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<form method="POST" action="<?php echo base_url();?>karyawan/search">
				<div class="user">
					<div class="search">
						<p>Project</p>
						<input name="project" type="text" size="23" class="form-control">
					</div>
					<div class="search">
						<p>TW</p>
						<input name="tw" type="text" size="10" class="form-control">
					</div>
					<div class="search">
						<p>Tahun</p>
						<input name="tahun" type="text" size="10" class="form-control">
					</div>
					<div class="search">
						<p>Anggaran</p>
						<input name="anggaran" type="text" size="13" class="form-control">
					</div>
					<div class="search">
						<p>Jenis Kegiatan</p>
						<input name="jenis-kegiatan" type="text" size="23" class="form-control">
					</div>
				</div>
				<br>
				<input class="search-button" type="submit" value="Search">
			</form>
		</div>
	</body>
	</html>