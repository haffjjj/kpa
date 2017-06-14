<?php foreach ($anggaran as $row_anggaran){?>
<tr>
	<td><?php echo $row_anggaran['triwulan']; ?></td>
	<td><?php echo $row_anggaran['bulan']; ?></td>
	<td>Rp.<?php echo number_format($row_anggaran['jumlah'],0,",","."); ?>,-</td>
	<td><?php echo $row_anggaran['tahun']; ?></td>
	<td class="action">
		<button class="click_edit_anggaran action-button" type="button" data-idproject="<?php echo $row_anggaran['id_project']; ?>" data-bulan="<?php echo $row_anggaran['bulan']; ?>">
			<img src="<?php echo base_url(); ?>assets/img/edit.png" alt="Edit" />
		</button>
		<a class="action-button" type="button" onclick="return confirm('Anda yakin');" href='<?php echo base_url() ?>admin/delete_anggaran/<?php echo $row_anggaran['id_project']; ?>/<?php echo $row_anggaran['bulan']; ?>'>
			<img src="<?php echo base_url(); ?>assets/img/delete.png" alt="Delete"  />
		</a>
	</td>
</tr>
<?php } ?>
<script type="text/javascript">
	$(document).ready(function(){
		var $modal = $('#popup_modal');
		$('.click_edit_anggaran').on('click', function(){
			var id_project = $(this).data('idproject');
			var bulan = $(this).data('bulan');
			$modal.load('<?php echo base_url(); ?>admin/modal_edit_anggaran',{id_project: id_project,bulan: bulan},
				function(){
					$modal.modal('show');
				});
		});
	});
</script>