<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/style-dashboard-admin.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="col-sm-2 side">

		<div class="user">
			<img src="<?php echo base_url(); ?>assets/img/profil.jpg">
			<h4><?php echo $username; ?></h4>
			<p><?php echo $page; ?></p>
			<hr align="center">
			<h6><a href="<?php echo base_url("login/sign_out");?>">Sign Out</a></h6>
		</div>
	</div>


	<div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view" style="margin-top:60px;">
				<img src="<?php echo base_url();?>assets/img/create.png">
				<div>
					<h3>Create Group</h3>
					<hr align="left">
				</div>
			</div>
			<form action="<?php echo base_url(); ?>admin/create_group" method="POST">
				<input type="hidden" name="op" value="tambah">
				<div class="save save-name">
					<p>Nama Group</p>
					<input class="form-control" type="text" name="nama_group" size="20">
				</div>
				<div class="save">
					<p>Nama Bidang</p>
					<input class="form-control" type="text" name="nama_bidang" size="20">
				</div>
				<div class="save div-save">
					<p></p>
					<input class="save-save" type="submit" value="Create" style="right:0;bottom:0;">
				</div>
			</form>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/view.png" width="">
				<div>
					<h3>View Group</h3>
					<hr align="left">
				</div>
			</div>
			<div class="table-isi">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nama Group</th>
							<th>Nama Bidang</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($group as $row_group){ ?>
						<tr>
							<td><?php echo $row_group['nama_group'] ?></td>
							<td><?php echo $row_group['nama_bidang'] ?></td>
							<td class="action">
								<button class="click_edit_group action-button" type="button" data-idgroup="<?php echo $row_group['id_group'] ?>">
									<img src="<?php echo base_url(); ?>assets/img/edit.png" alt="Edit" />
								</button>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/create.png">
				<div>
					<h3>Create User</h3>
					<hr align="left">
				</div>
			</div>
			<form action="<?php echo base_url(); ?>admin/create_user" method="POST">
				<input type="hidden" name="op" value="tambah">
				<div class="save save-name">
					<p>NIK</p>
					<input class="form-control" type="text" name="nik" size="11">
				</div>
				<div class="save">
					<p>Member Group</p>
					<select name="member_group" class="form-control">
						<option>-- Member --</option>
						<?php foreach ($group as $row_group) {?>
						<option value="<?php echo $row_group['id_group'] ?>"><?php echo $row_group['nama_group'] ?></option>
						<?php }?>
					</select>

				</div>
				<div class="save">
					<p>Level</p>
					<select name="level" class="form-control">
						<option>-- Level --</option>
						<option value="2">Sekretaris</option>
						<option value="0">Karyawan</option>
					</select>
				</div>
				<div class="save">
					<p>User Name</p>
					<input class="form-control" type="text" name="username" size="12">
				</div>
				<div class="save">
					<p>Password</p>
					<input class="form-control" type="text" name="password" size="12">
				</div>
				<div class="save div-save">
					<p></p>
					<input class="save-save" type="submit" value="Create">
				</div>
			</form>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/view.png" width="">
				<div>
					<h3>View User</h3>
					<hr align="left">
				</div>
			</div>
			<div class="table-isi">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>NIK</th>
							<th>Member Group</th>
							<th>Level</th>
							<th>User Name</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($user as $row) {?>
						<tr>
							<td><?php echo $row['nik']; ?></td>
							<td>
								<?php foreach ($group as $row_group) {?>
								<?php if ($row_group['id_group'] == $row['id_group']) {
									echo $row_group['nama_group'];
								}
							}
							?>
						</td>
						<td>
							<?php if ($row['level'] == 1){
								echo "Admin";
							}
							elseif ($row['level'] == 2) {
								echo "Sekretaris";
							}
							elseif ($row['level'] == 0) {
								echo "Karyawan";
							}
							?>
						</td>
						<td><?php echo $row['username']; ?></td>

						<td class="action">
							<button class="click_edit_user action-button" type="button" data-nik="<?php echo $row['nik']; ?>">
								<img src="<?php echo base_url(); ?>assets/img/edit.png" alt="Edit" />
							</button>

							<a class="action-button" type="button" onclick="return confirm('Anda yakin menghapus <?php echo $row['username']; ?>');" href='<?php echo base_url(); ?>/admin/delete_user/<?php echo $row["nik"]; ?>'>
								<img src="<?php echo base_url(); ?>assets/img/delete.png" alt="Delete"  />
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/create.png">
				<div>
					<h3>Create Project</h3>
					<hr align="left">
				</div>
			</div>
			<form action="<?php echo base_url(); ?>admin/create_project" method="POST">
				<input type="hidden" name="op" value="tambah">
				<div class="save save-name">
					<p>Nama Project</p>
					<input class="form-control" type="text" name="nama_project" size="20">
				</div>
				<div class="save">
					<p>Jenis Anggaran</p>
					<input class="form-control" type="text" name="jenis_anggaran" size="20">
				</div>
				<div class="save div-save">
					<p></p>
					<input class="save-save" type="submit" value="Create">
				</div>
			</form>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/view.png" width="">
				<div>
					<h3>View Project</h3>
					<hr align="left">
				</div>
			</div>
			<div class="table-isi">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nama Project</th>
							<th>Jenis Anggaran</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($project as $row_project){ ?>
						<tr>
							<td><?php echo $row_project['nama_project'] ?></td>
							<td><?php echo $row_project['jenis_anggaran'] ?></td>
							<td class="action">
								<button class="click_edit_project action-button" type="button" data-idproject="<?php echo $row_project['id_project'] ?>">
									<img src="<?php echo base_url(); ?>assets/img/edit.png" alt="Edit" />
								</button>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	

	<div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/create.png">
				<div>
					<h3>Input Anggaran</h3>
					<hr align="left">
				</div>
			</div>
			<form action="<?php echo base_url(); ?>admin/input_anggaran" method="POST">
				<input type="hidden" value="tambah" name="op">
				<div class="save save-name">
					<p>Project</p>
					<select class="form-control" id="project" name="project">
						<option>-- Project --</option>
						<?php foreach ($project as $row_project) { ?>
						<option value="<?php echo $row_project['id_project'] ?>"><?php echo $row_project['nama_project'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="save">
					<p>Triwulan</p>
					<select class="form-control" id="triwulan-anggaran" name="triwulan">
						<option>-- Triwulan --</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="save">
					<p>Bulan</p>
					<select class="form-control" id="bulan-triwulan" name="bulan">
						<option>-- Bulan --</option>
					</select>
				</div>
				<div class="save">
					<p>Jumlah</p>
					<input id="tahun" class="form-control" type="text" name="jumlah" size="20">
				</div>
				<div class="save">
					<p>Tahun</p>
					<input id="tahun" class="form-control" value="<?php echo date("Y") ?>" type="text" name="tahun" size="4">
				</div>
				<div class="save div-save">
					<p></p>
					<input type="submit" class="save-save" value="Input">
				</div>
			</form>
		</div>

		<div class="col-sm-8 col-sm-offset-2">
			<div class="create-view">
				<img src="<?php echo base_url();?>assets/img/view.png" width="">
				<div>
					<h3>View Anggaran</h3>
					<hr align="left">
				</div>
			</div>
			<div class="table-isi">

				<div class="edit-anggaran" style>
					<div class="save">
						<select class="form-control" id="data-anggaran">
							<option value="">-- Project --</option>
							<?php foreach ($project as $row_project) { ?>
							<option value="<?php echo $row_project['id_project'] ?>"><?php echo $row_project['nama_project'] ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<table class="table table-striped">
					<thead>
						<tr>
							<th>Triwulan</th>
							<th>Bulan</th>
							<th>Jumlah</th>
							<th>Tahun</th>
						</tr>
					</thead>
					<tbody id="anggaran">
						<tr>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		var $modal = $('#popup_modal');
		$('.click_edit_group').on('click', function(){
			var id_group = $(this).data('idgroup');
			$modal.load('<?php echo base_url(); ?>admin/modal_edit_group',{id_group: id_group},
				function(){
					$modal.modal('show');
				});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		var $modal = $('#popup_modal');
		$('.click_edit_user').on('click', function(){
			var nik = $(this).data('nik');
			$modal.load('<?php echo base_url(); ?>admin/modal_edit_user',{nik: nik},
				function(){
					$modal.modal('show');
				});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		var $modal = $('#popup_modal');
		$('.click_edit_project').on('click', function(){
			var id_project = $(this).data('idproject');
			$modal.load('<?php echo base_url(); ?>admin/modal_edit_project',{id_project: id_project},
				function(){
					$modal.modal('show');
				});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#triwulan-anggaran').on('click',function(e){
			var triwulan_anggaran = $('#triwulan-anggaran').val();
			$.ajax({
				type:'POST',
				data:{triwulan_anggaran: triwulan_anggaran},
				url:'<?php echo base_url();?>admin/ajax_triwulan_anggaran',
				success: function(result){
					$('#bulan-triwulan').html(result);
				}
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#data-anggaran').on('click',function(e){
			var data_anggaran = $('#data-anggaran').val();
			$.ajax({
				type:'POST',
				data:{data_anggaran: data_anggaran},
				url:'<?php echo base_url();?>admin/ajax_anggaran',
				success: function(result){
					$('#anggaran').html(result);
				}
			});
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		var $modal = $('#popup_modal');
		$('.click-edit-anggaran').on('click', function(){
			$modal.load('<?php echo base_url(); ?>admin/modal_edit_anggaran',{},
				function(){
					$modal.modal('show');
				});
		});
	});
</script>



<div id="popup_modal" class="modal fade" tabindex="-1"></div>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>