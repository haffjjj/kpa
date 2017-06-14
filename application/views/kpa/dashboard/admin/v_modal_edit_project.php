<?php 
foreach ($project as $row){
  $id_project = $row['id_project'];
  $nama_project = $row['nama_project'];
  $jenis_anggaran = $row['jenis_anggaran'];
}
?>

<html>
<head>
  <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
</head>
<div id="load_popup_modal_contant" class="" role="dialog">

  <div class="modal-dialog modal-sm">
   <div role="form" class="form-inline" role="form" id="form_load_content_id">
    <!-- Start: Modal content-->
    <div class="modal-content">
      <form action="<?php echo base_url(); ?>admin/create_project" method="POST">
        <input type="hidden" name="op" value="edit" class="form-control">
        <input type="hidden" name="id_project" value="<?php echo $id_project; ?>" class="form-control">
        <p>Nama Project</p>
        <input value="<?php echo $nama_project; ?>" type="text" name="nama_project" class="form-control" size="26">
        <p>Jenis Anggaran</p>
        <input value="<?php echo $jenis_anggaran; ?>" type="text" name="jenis_anggaran" class="form-control" size="26">
        <br>
        <div class="button-modal">
          <button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
          <button class="save-modal" type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</html>