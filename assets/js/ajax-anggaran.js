$(document).ready(function(){
	$('#bulan').click(function(){
		var bulan = $('#bulan').val();
		$.ajax({
			type:'POST',
			data:{bulan: bulan},
			url:'<?php echo base_url();?>karyawan/ajax_anggaran',
			success: function(result){
				$('#result1').html(result);
			}
		});
	});
});