<?php 
$id_group = "";
$nama_group = "";
$nama_bidang = "";
foreach ($group as $row){
  $id_group = $row['id_group'];
  $nama_group = $row['nama_group'];
  $nama_bidang = $row['nama_bidang'];
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
      <form action="<?php echo base_url(); ?>admin/create_group" method="POST">
        <input type="hidden" name="op" value="edit" class="form-control">
        <input type="hidden" name="id_group" value="<?php echo $id_group; ?>" class="form-control">
        <p>Nama Group</p>
        <input value="<?php echo $nama_group; ?>" type="text" name="nama_group" class="form-control" size="26">
        <p>Nama Bidang</p>
        <input value="<?php echo $nama_bidang; ?>" type="text" name="nama_bidang" class="form-control" size="26">
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