</body>

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

<script type="text/javascript">
	$(document).ready(function(){
		var $modal = $('#load_popup_modal_edit');
		$('.click_edit_modal').on('click', function(){
			var id_penyerapan = $(this).data('idpenyerapan');
			$modal.load('<?php echo base_url(); ?>/karyawan/ajax_modal_edit',{id_penyerapan: id_penyerapan},
				function(){
					$modal.modal('show');
				});
		});
	});
</script>
<div id="load_popup_modal_add" class="modal fade" tabindex="-1"></div>
<div id="load_popup_modal_edit" class="modal fade" tabindex="-1"></div>

<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>