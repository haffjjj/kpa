<html>
<head>
  <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
</head>
<div id="load_popup_modal_contant" class="" role="dialog">

  <div class="modal-dialog modal-lg">
   <div role="form" class="form-inline" role="form" id="form_load_content_id">
    <!-- Start: Modal content-->
    <div class="modal-content">
      <form action="<?php echo base_url(); ?>admin/create_user" method="POST">
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
            <tr>
              <td>1</td>
              <td>1</td>
              <td>
                <input type="text" class="form-control">
              </td>
              <td>
                <input value="2017" size="4"  type="text" class="form-control">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>2</td>
              <td>
                <input type="text" class="form-control">
              </td>
              <td>
                <input value="2017" size="4"  type="text" class="form-control">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>3</td>
              <td>
                <input type="text" class="form-control">
              </td>
              <td>
                <input value="2017" size="4"  type="text" class="form-control">
              </td>
            </tr>
            <tr>
              <td></td>
              <td>4</td>
              <td>
                <input type="text" class="form-control">
              </td>
              <td>
              <input value="2017" size="4" type="text" class="form-control">
              </td>
            </tr>
          </tbody>
        </table>
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