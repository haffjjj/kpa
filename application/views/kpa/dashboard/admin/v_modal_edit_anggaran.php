<html>
<head>
  <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
</head>
<div id="load_popup_modal_contant" class="" role="dialog">

  <div class="modal-dialog modal-lg">
   <div role="form" class="form-inline" role="form" id="form_load_content_id">
    <!-- Start: Modal content-->
    <div class="modal-content">
    <form action="<?php echo base_url(); ?>admin/input_anggaran" method="POST">
        <input type="hidden" value="edit" name="op">
        <table class="table table-anggaran" style="color:black;">
          <thead>
            <tr>
              <th>Triwulan</th>
              <th>Bulan</th>
              <th>Jumlah</th>
              <th>Tahun</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($anggaran as $row){} ?>
            <tr>
              <input type="hidden" value="<?php echo $row['id_project'] ?>" name="project">
              <input type="hidden" value="<?php echo $row['bulan'] ?>" name="bulan">
              <td><?php echo $row['triwulan'] ?></td>
              <td><?php echo $row['bulan'] ?></td>
              <td>Rp.<input name="jumlah" value="<?php echo $row['jumlah'] ?>" type="text" class="form-control" style="margin:0px;">,-</td>
              <td>
                <input name="tahun" value="<?php echo $row['tahun'] ?>" size="4"  type="text" class="form-control" style="margin:0px;">
              </td>
            </tr>
            <? } ?>
          </tbody>
        </table>
        <br>
        <div class="button-modal" style="margin-top:0px;">
          <button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
          <button class="save-modal" type="submit">Update</button>
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