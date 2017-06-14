<?php 
$nik = "";
$member_group = "";
$username = "";
$level = "";

foreach ($user as $row){
  $nik = $row['nik'];
  $member_group = $row['id_group'];
  $username = $row['username'];
  $level = $row['level'];
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
      <form action="<?php echo base_url(); ?>admin/create_user" method="POST">
        <input type="hidden" name="op" value="edit" class="form-control">
        <input type="hidden" name="nik" value="<?php echo $nik; ?>" class="form-control">
        <p>Member Group</p>
        <input value="<?php echo $member_group; ?>" type="text" name="member_group" class="form-control" size="26">
        <p>Level</p>
        <input value="<?php echo $level; ?>" type="text" name="level" class="form-control" size="26">
        <p>Username</p>
        <input value="<?php echo $username; ?>" type="text" name="username" class="form-control" size="26">
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
<script type="text/javascript">
  $('select[name^="level"]').eq(0).focus();
</script>
</html>