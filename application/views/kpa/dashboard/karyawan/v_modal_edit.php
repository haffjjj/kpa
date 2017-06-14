<?php

$id_penyerapan = "";
$nama_kegiatan ="";
$jenis_kegiatan ="";
$tanggal="";
$status = "";
$jumlah="";

foreach ($sql->result() as $obj){
  $id_penyerapan = $obj->id_penyerapan;
  $id_project = $obj->id_project;
  $nama_kegiatan =$obj->nama_kegiatan;
  $jenis_kegiatan =$obj->jenis_kegiatan;
  $tanggal=$obj->tanggal;
  $status = $obj->status;
  $jumlah = $obj->jumlah;
}

?>

<html>
<head>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#bulan').on('input',function(e){
        var bulan = $('#bulan').val();
        var id_project = $('#id_project').val();
        $.ajax({
          type:'POST',
          data:{bulan: bulan,id_project: id_project},
          url:'<?php echo base_url();?>karyawan/ajax_anggaran',
          success: function(result){
            $('#anggaran').html(result);
          }
        });
      });
    });
  </script>
  <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
</head>
<div id="load_popup_modal_contant" class="" role="dialog">

  <div class="modal-dialog modal-sm">
   <div role="form" class="form-inline" role="form" id="form_load_content_id">
    <!-- Start: Modal content-->
    <div class="modal-content">
      <div class="ket-modal">
        <h6 class="anggaran">Anggaran</b></h6>
        <p id="nis"></p>
        <h6 class="angg-rp">Rp.<span id="anggaran">0</span>,-</h6>
      </div>
      <form action="<?php echo base_url(); ?>Karyawan/add_penyerapan" method="POST">
        <input type="hidden" name="op" value="edit" class="form-control">
        <input type="hidden" name="id_penyerapan" value="<?php echo $id_penyerapan ?>" class="form-control">
        <input type="hidden" id="id_project" name="id_project" value="<?php echo $id_project ?>" class="form-control">
        <p>Nama Kegiatan</p>
        <input value="<?php echo $nama_kegiatan ?>" type="text" name="nama_kegiatan" class="form-control" size="26">
        <p>Jenis Kegiatan</p>
        <input value="<?php echo $jenis_kegiatan ?>" type="text" name="jenis_kegiatan" class="form-control" size="26">
        <p>Tanggal Kegiatan</p>
        <input value="<?php echo $tanggal ?>" type="date" name="tanggal" class="form-control" id="bulan">
        <p>Status</p>
        <input value="<?php echo $status ?>" type="text" name="status" class="form-control" size="26">
        <p>Jumlah</p>
        <input value="<?php echo $jumlah ?>" type="text" name="jumlah" class="form-control" size="26">
        <br>
        <div class="button-modal">
          <button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
          <button class="save-modal" type="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</html>
