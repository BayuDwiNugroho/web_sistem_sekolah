<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Barang</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Barang
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Kode Barang</th>
                                 <th><i class="icon_mail_alt"></i> Nama Barang</th>
                                 <th><i class="icon_pin_alt"></i> Satuan</th>
                                 <th><i class="icon_mobile"></i> Harga</th>
								 <th><i class="icon_calendar"></i> Harga Beli</th>
                                 <th><i class="icon_cogs"></i> Stok</th>
								 <th><i class="icon_cogs"></i> Stok Min</th>
                              </tr>
					<?php  
							$sql = mysqli_query($con,"SELECT * FROM barang ORDER BY kd_brg DESC");    
							
							while($hasil = mysqli_fetch_array($sql)) {     	
								$kd_brg =$hasil['kd_brg'];
								$nm_brg  = stripslashes($hasil['nm_brg']);  
								$satuan = stripslashes($hasil['satuan']);  
							 	$harga = stripslashes($hasil['harga']);  
							 	$harga_beli = stripslashes($hasil['harga_beli']);  
							 	$stok = stripslashes($hasil['stok']);
							 	$stok_min = stripslashes($hasil['stok_min']); 
  ?>		  
							<tr>

							<td>
							<?php echo $kd_brg;?>
							</td>
							<td>
							<?php echo $nm_brg;?>
							</td>
							<td>
							<?php echo $satuan;?>
							</td>
							<td>
							<?php echo $harga;?>
							</td>
							<td>
							<?php echo $harga_beli;?>
							</td>
							<td>
								<?php echo $stok;?>
							</td>
							<td>
								<?php echo $stok_min;?>
							</td>

							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index_admin.php?page=input_barang&kd_barang=<?php echo $kd_brg;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index_admin.php?page=edit_barang&kd_barang=<?php echo $kd_brg;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index_admin.php?page=delete_barang&kd_barang=<?php echo $kd_brg;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>


