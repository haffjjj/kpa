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
<script type="text/javascript">
    $(document).ready(function(){
      $('#lihat-tw-tahun-<?php echo $get_project["id_project"] ?>').on('click',function(e){
        var tahun = $('#tahun-<?php echo $get_project["id_project"] ?>').val();
        var triwulan = $('#triwulan-<?php echo $get_project["id_project"] ?>').val();
        var id_project = <?php echo $get_project["id_project"] ?>;
        $.ajax({
          type:'POST',
          data:{tahun: tahun,triwulan: triwulan,id_project: id_project},
          url:'<?php echo base_url();?>karyawan/ajax_project',
          success: function(result){
            $('#project-ajax-<?php echo $get_project["id_project"] ?>').html(result);
          }
        });
      });
    });
  </script>

<div class="col-sm-10 col-sm-offset-1 tabel-isi" style="padding-bottom:0px; padding:10px; margin-top:40px;">
	<div class="search" style="margin-bottom:0px;">
		<select id="triwulan-<?php echo $get_project["id_project"] ?>" class="form-control">
			<option>-- Triwulan --</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</div>
	<div class="search" style="margin-bottom:0px;">
		<select id="tahun-<?php echo $get_project["id_project"] ?>" class="form-control">
			<option>-- tahun --</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
		</select>
	</div>
	<div class="search" style="margin-bottom:0px;">
		<button id="lihat-tw-tahun-<?php echo $get_project["id_project"] ?>" class="lihat-project" type="button">Lihat</button> <?php echo $get_project['nama_project']; ?>
	</div>
</div>