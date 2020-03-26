<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>SD BDN</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css')?>">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/responsive.css')?>">
  <!-- font icon -->
<link href="<?php echo base_url('assets/myadmin/css/elegant-icons-style.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/myadmin/css/font-awesome.min.css');?>" rel="stylesheet" />    

  
     <!--link buat slideshow-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--slide show-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container1 {
        padding: 80px 120px;
    }
    .person1 {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
    }
    .person1:hover {
        border-color: #f1f1f1;
    }
    </style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<!--<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="#"><h3>BeritaKU</h3></a></div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="index.html"><h4>Home</h4></a></li>
								<li><a href="#"><h4>Ekonomi</h4></a></li>
								<li><a href="#"><h4>Edukasi</h4></a></li>
								<li><a href="#"><h4>Olahraga</h4></a></li>
								<li><a href="#"><h4>Hiburan</h4></a></li>
							</ul>
						</nav>
						<div class="search_container ml-auto">
							<!--<div class="weather">
								<div class="temperature">+10°</div>
								<img class="weather_icon" src="<?php echo base_url('assets/images/cloud.png')?>" alt="">
							</div>
							
							<form action="#">
								<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
									
									<img class="header_search_icon" src="<?php echo base_url('assets/images/search.png')?>" alt="">

							</form>
							
							
						</div>
						<nav class="main_nav">
						<ul>
									
								<li><div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">Daftar</a></div></li>
								<li><a href="#"><h4>Login</h4></a></li>

							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		-->
	<footer class="footer">
		<div class="container">
			<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a>
					                      <i class="icon_profile" style="color: white"></i>
					                          <span style="color: white"><?php echo $_SESSION['nama_siswa']; ?></span>
					                     </a></div>
							<nav class="main_nav">
								<ul>
									<li><a href="<?php echo base_url('dashboard/visi')?>"><h4>Visi Misi</h4></a></li>
									<li><a href="<?php echo base_url('dashboard/galeri')?>"><h4>Galery</h4></a></li>
									<li><a href="<?php echo base_url('dashboard/buku_tamu')?>"><h4>Buku Tamu</h4></a></li>
									<li></li>
								</ul>
							</nav>
							<div class="search_container ml-auto">
								<!--<div class="weather">
									<div class="temperature">+10°</div>
									<img class="weather_icon" src="<?php echo base_url('assets/images/cloud.png')?>" alt="">
								</div>-->
								
								<form action="#">
									<div class="logo">
										 <a href="<?php echo base_url('dashboard/logout')?>" >
										 	<i class="fa fa-sign-in" style="color: white"></i>
										 	<span style="color: white"> Logout </span>
										 </a>
									</div>
									
								</form>	
							</div>
							<nav class="main_nav">
								<ul>	
									<li>
								</ul>
							</nav>
					</div>
				</div>
			</div>
				</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">SD BDN PATI</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
				<img class="header_search_icon menu_mm" src="<?php echo base_url('assets/images/search_2.png')?>" alt="">
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				
			</ul>
		</nav>

	</div>
	
	<!-- Home -->

	
<center>
	
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                      <!-- Indicators -->
                                      <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                      </ol>

                                      <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                           
                                          <div class="carousel-caption">
                                            
                                          </div>      
                                        </div>

                                        <div class="item">
                                         
                                          <div class="carousel-caption">
                                          </div>      
                                        </div>
                                      
                                        <div class="item">
                                          <div class="carousel-caption">
                                          </div>      
                                        </div>
                                      </div>
                                  </div>
</center>
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Blog Section - Don't Miss -->

						

						<!-- Blog Section - What's Trending -->
						<br></br>
							<div class="blog_section">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      		<thead>
                             <?php 
                               $no_urut = 0; 
                            ?>
                              <tr><th><i class="icon_profile"></i>No</th> 
                                 <th><i class="icon_profile"></i>ID</th>
                                 <th><i class="icon_profile"></i> Nama Siswa</th>
                                 <th><i class="icon_calendar"></i> Kelas</th>
                                 <th><i class="icon_calendar"></i> Nilai IPA</th>
                                 <th><i class="icon_calendar"></i> Nilai IPS</th>
                                 <th><i class="icon_calendar"></i> Nilai Matematika</th>
                                 <th><i class="icon_calendar"></i> Nilai B.Indonesia</th>
                                 <th><i class="icon_calendar"></i> Nilai B.Inggris</th>
                                 
                              </tr> 
                        	</thead>
                              <tbody> <?php foreach ($qry->result() as $data){

                                        $no_urut++;
                                        echo "<tr>";
                                        echo "<td>".$no_urut."</td>";
                                        echo "<td>".$data->id_lap."</td>";
                                        echo "<td>".$data->nama_siswa."</td>";
                                        echo "<td>".$data->kelas."</td>";
                                        echo "<td>".$data->nilai_ipa."</td>";
                                        echo "<td>".$data->nilai_ips."</td>";
                                        echo "<td>".$data->nilai_mtk."</td>";
                                        echo "<td>".$data->nilai_bind."</td>";
                                        echo "<td>".$data->nilai_bing."</td>";
                                        echo"</tr>";
                  
                              }
                      ?>         
                       
	                            </tbody>
	                        </table>
						</div>
						 <i class="icon_printer"></i> <a href="<?php echo base_url('Laporan')?>"> Download PDF</a>
							

						<!-- Blog Section - Videos -->


						<div class="blog_section">
							
						</div>

						<!-- Blog Section - Latest -->

						<div class="blog_section">
							
						</div>

					</div>
					<div class="load_more">
					</div>
				</div>

				<!-- Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_background"></div>

						<!-- Top Stories -->

						<div class="sidebar_section">
							
							</div>
							<div class="sidebar_section_content">

								<!-- Top Stories Slider -->
								<div class="sidebar_slider_container">
									<div class="owl-carousel owl-theme sidebar_slider_top">

										<!-- Top Stories Slider Item -->
										<div class="owl-item">

											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="post.html">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url()."assets/images/post_4.jpg";?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><a href="<?php echo base_url('show_nilai/nilai_mrd')?>">Nilai</div><!--
															<small class="post_meta">Katy Liu<span>Sep 29</span></small>-->
														</div>
													</div>
												</a>
											</div>

											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="post.html">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url()."assets/images/top_2.jpg";?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><a href="<?php echo base_url('dashboard/galeri')?>">Galery</div>
															
														</div>
													</div>
												</a>
											</div>

											<!-- Sidebar Post -->
											<div class="side_post">
												<a href="post.html">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="<?php echo base_url()."assets/img/bg-1.jpg";?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><a href="<?php echo base_url('dashboard/buku_tamu')?>">Buku Tamu</a></div>
															
														</div>
													</div>
												</a>
											</div>

											

										</div>

										<!-- Top Stories Slider Item -->
										<div class="owl-item">

											

										</div>

									</div>
								</div>
							</div>
						</div>

						<!-- Advertising -->


						<!-- Newest Videos -->

						<div class="sidebar_section newest_videos">
							
						</div>

						<!-- Advertising 2 -->

						
						<!-- Future Events -->

						<div class="sidebar_section future_events">
							

											<!-- Future Events Post -->
											

										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-9 order-lg-1 order-2">
					<div class="footer_content">
						<div class="footer_logo"><a href="#">SD BDN</a></div>
						<div class="footer_social">
							<ul>
								<li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved || This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Bayu Dwi Nugroho</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/popper.js')?>"></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/masonry/masonry.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/masonry/images_loaded.js')?>"></script>
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>
	