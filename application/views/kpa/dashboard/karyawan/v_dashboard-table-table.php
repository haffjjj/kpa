				<tbody>
					<tr>
						<td><?php echo $no; ?></td>
						<td>
							<p class="n-keg"><?php echo $get_penyerapan['nama_kegiatan']; ?></p>
							<p class="ket">Submited : <?php echo $get_penyerapan['submited']; ?> <?php echo $get_penyerapan['tanggal_submit']; ?></p>
						</td>
						<td><?php echo $get_penyerapan['jenis_kegiatan']; ?></td>
						<td><?php echo $get_penyerapan['tanggal']; ?></td>
						<td><?php echo $get_penyerapan['status']; ?></td>
						<td>Rp.<?php echo number_format($get_penyerapan['jumlah'],0,",",".");?>,-</td>
						<td>
							<button type="button" style="color:#53c609; background-color: transparent; border:0px;" class="click_edit_modal" data-idpenyerapan="<?php echo $get_penyerapan['id_penyerapan']; ?>">
								<span class="glyphicon glyphicon-pencil"></span>
							</button>
							<a href="<?php echo base_url(); ?>karyawan/hapus_penyerapan/<?php echo $get_penyerapan['id_penyerapan']; ?>" onclick="return confirm('Anda yakin menghapus');" style="color:red;">
								<span class="glyphicon glyphicon-trash"></span>
							</a>			
						</td>
					</tr>
				</tbody>
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