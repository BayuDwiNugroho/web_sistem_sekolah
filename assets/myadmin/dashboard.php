      <!--main content start-->
	   <section id="main-content">
          <section class="wrapper"> 



            <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Laporan Nilai</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-laptop"></i>Nilai</li>						  	
					</ol>
				</div>
			</div>              
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-success">
                        
                    <div class="panel-body">
                    <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                              <tr>
                                 <th><i class="icon_profile"></i>ID</th>
                                 <th><i class="icon_profile"></i> Nama Siswa</th>
                                 <th><i class="icon_calendar"></i> Mapel</th>
                                 <th><i class="icon_calendar"></i> Kelas</th>
								 <th><i class="icon_calendar"></i> Nilai Tugas</th>
                                 <th><i class="icon_calendar"></i> Nilai UTS</th>
								 <th><i class="icon_calendar"></i> Nilai UAS</th>
                                 <th><i class="icon_cogs"></i> Aksi</th>
                              </tr> 
                              </thead>
                              <tbody>
					<?php if( ! empty($lap_nilai)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                                foreach($lap_nilai as $data){
                                    ?>
                                  <tr>
                                      <td><?php echo"$data->id_lap"?></td>
                                      <td><?php echo"$data->nama_siswa"?></td>
                                      <td><?php echo"$data->mapel"?></td>
                                      <td><?php echo"$data->kelas"?></td>
                                      <td><?php echo"$data->nilai_tgs"?></td>
                                      <td><?php echo"$data->nilai_uts"?></td>
                                      <td><?php echo"$data->nilai_uas"?></td>
                                      <td>
                                         <div class="btn-group">
                                            <a class="btn btn-primary" href="<?php echo base_url().'show_nilai/tambah';?>"><i class="icon_plus_alt2"></i></a>
                                            <a class="btn btn-success" href="<?php echo base_url().'show_nilai/ubah';?>"><i class="icon_check_alt2"></i></a>
                                            <a class="btn btn-danger" href="<?php echo base_url().'show_nilai/hapus';?>" onClick='return konfrim()'><i class="icon_close_alt2"></i></a>
                                         </div>
                                      </td>
                                 </tr> 
                     <?php }
                              }else{ // Jika data siswa kosong
                                echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
                              }
                      ?>		 
                       
	                       	</tbody>
                        </table>
                  </div>
              </div>
            </div>
        </div>
    </div>

		</section>
    </section>
      <!--main content end-->
  </section>