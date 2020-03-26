<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Konsumen</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Konsumen
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                              	 <th><i class="icon_profile"></i> Kode Konsumen</th>
                                 <th><i class="icon_profile"></i> Nama Konsumen</th>
                                 <th><i class="icon_mail_alt"></i> Alamat Konsumen</th>
                                 <th><i class="icon_pin_alt"></i> Kota Konsumen</th>
                                 <th><i class="icon_mobile"></i> Kode Pos</th>
								 <th><i class="icon_mobile"></i> Phone</th>
								 <th><i class="icon_mobile"></i> Email</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
<?php  
  $sql = mysqli_query($con,"SELECT * FROM konsumen ORDER BY kd_kons DESC");    
  while($hasil = mysqli_fetch_array($sql)) { 
  	$kd_kons = $hasil['kd_kons'];     	
 	$nm_kons  = stripslashes($hasil['nm_kons']);  
 	$alm_kons = stripslashes($hasil['alm_kons']);  
 	$kota_kons = stripslashes($hasil['kota_kons']);  
 	$kd_pos = $hasil['kd_pos'];  
 	$phone  = $hasil['phone'];
 	$email  = $hasil['email'];   
  ?>		  
							<tr>
							<td>
							<?php echo $kd_kons;?>
							</td>
							<td>
							<?php echo $nm_kons;?>
							</td>
							<td>
							<?php echo $alm_kons;?>
							</td>
							<td>
							<?php echo $kota_kons;?>
							</td>
							<td>
							<?php echo $kd_pos;?>
							</td>
							<td>
							<?php echo $phone;?>
							</td>
							<td>
							<?php echo $email;?>
							</td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index_admin.php?page=input_konsumen&kd_kons=<?php echo $kd_kons;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index_admin.php?page=edit_konsumen&kd_kons=<?php echo $kd_kons;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index_admin.php?page=delete_konsumen&kd_kons=<?php echo $kd_kons;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>