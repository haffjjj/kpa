 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Laporan.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">

  <thead>

   <tr>

    <th>Nama Kegiatan</th>
    <th>Jenis Kegiatan</th>
    <th>Tanggal Kegiatan</th>
    <th>Status</th>
    <th>Jumlah</th>
    <th>Submited</th>
    <th>Tanggal Submit</th>

  </tr>

</thead>

<tbody>

 <?php foreach ($penyerapan as $row_penyerapan) { ?>
 <tr>
 <td><?php echo $row_penyerapan['nama_kegiatan']; ?></td>
  <td><?php echo $row_penyerapan['jenis_kegiatan']; ?></td>
  <td><?php echo $row_penyerapan['tanggal']; ?></td>
  <td><?php echo $row_penyerapan['status']; ?></td>
  <td><?php echo $row_penyerapan['jumlah']; ?></td>
  <td><?php echo $row_penyerapan['submited']; ?></td>
  <td><?php echo $row_penyerapan['tanggal_submit']; ?></td>
</tr>
<?php } ?>

</tbody>

</table>