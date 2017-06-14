<span id="project-ajax-<?php echo $get_project['id_project']; ?>">
	<div class="col-sm-10 col-sm-offset-1 tabel-isi">
		<div class="edit-save">
				<button class="click_add_modal edit" data-project="<?php echo $get_project['id_project']; ?>" data-triwulan="<?php echo $triwulan; ?>" data-tahun="<?php echo $tahun; ?>"
					>Add</button>
					<button style="margin-left:10px;" class="save" onclick="window.location.href='<?php echo base_url(); ?>karyawan/export/<?php echo $get_project['id_project']; ?>/<?php echo $triwulan; ?>/<?php echo $tahun; ?>'">Save</button>
			</div>
			<hr>
			<div class="project">
				<h4><?php echo $get_project['nama_project']; ?><small> <?php echo $get_project['jenis_anggaran']; ?></small></h4>
				<table>
					<tr>
						<td>Total Anggaran</td>
						<td>:</td>
						<td>Rp.<?php echo number_format($total_anggaran,0,",","."); ?>,-</td>
						<td class="triwulan">Triwulan</td>
					</tr>
					<tr>
						<td>Total Penyerapan</td>
						<td>:</td>
						<td>Rp.<?php echo number_format($total_penyerapan,0,",","."); ?>,-</td>
						<td class="tw-tahun"><?php echo $triwulan; ?>/<?php echo $tahun; ?></td>
					</tr>
					<tr>
						<td>Saldo</td>
						<td>:</td>
						<td align="center">
							<div>
								<p class="saldo" <?php 
								if ($total_anggaran-$total_penyerapan < 0) {
									echo "style='background-color:#ff4145'";
								}
								?>>Rp.
								<?php
								echo number_format($total_anggaran-$total_penyerapan,0,",",".");
								?>,-
							</p></div>
						</td>
					</tr>
				</table>
			</div>

			<div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Kegiatan</th>
							<th>Jenis Kegiatan</th>
							<th>Tanggal Kegiatan</th>
							<th>Status</th>
							<th>Jumlah</th>
							<th>Action</th>
						</tr>
					</thead>
					<script type="text/javascript">
						$(document).ready(function(){
							var $modal = $('#load_popup_modal_add');
							$('.click_add_modal').on('click', function(){
								var id_project = $(this).data('project');
								var triwulan = $(this).data('triwulan');
								var tahun = $(this).data('tahun');
								$modal.load('<?php echo base_url(); ?>/karyawan/ajax_modal_add',{id_project: id_project, triwulan: triwulan,tahun: tahun},
									function(){
										$modal.modal('show');
									});
							});
						});
					</script>