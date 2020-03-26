<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url('assets/myadmin/img/favicon.png');?>">

    <title>SekolahKU</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()."assets/myadmin/css/bootstrap.min.css";?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()."assets/myadmin/css/bootstrap-theme.css";?>"rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url('assets/myadmin/css/elegant-icons-style.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/myadmin/css/font-awesome.min.css');?>" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url('assets/myadmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/myadmin/assets/fullcalendar/fullcalendar/fullcalendar.css');?>"rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url('assets/myadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css');?>" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/myadmin/css/owl.carousel.css');?>" type="text/css">
    <link href="<?php echo base_url('assets/myadmin/css/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/myadmin/css/fullcalendar.css');?>">
    <link href="<?php echo base_url('assets/myadmin/css/widgets.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/myadmin/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/myadmin/css/style-responsive.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/myadmin/css/xcharts.min.css');?>" rel=" stylesheet">    
    <link href="<?php echo base_url('assets/myadmin/css/jquery-ui-1.10.4.min.css');?>" rel="stylesheet">

     <!--link buat slideshow-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url('assets2/js/dataTables/dataTables.bootstrap.css');?>" rel="stylesheet" />


  </head>

  <body>
    <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Siswa || <span class="lite">KU</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <!--<input class="form-control" placeholder="Search" type="text">-->
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> <?php date_default_timezone_set("Asia/Jakarta"); echo date("l, d F Y | H:i"); ?> &nbsp; 
            <a href="<?php echo base_url()."dashboard/logout";?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
             
                <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
        <?php
            include "menu_samping.php"
        ?>
      <!--sidebar end-->
      
      <!--main content start-->
       <section id="main-content">
          <section class="wrapper"> 



            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Siswa</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-laptop"></i>File Siswa</li>                          
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
                                 <p style="text-align:center" border="black"><h1><center><b> Selamat Datang Siswa SD BDN </b></center></h1></p>
                                 <p style="text-align:center" border="black"><h3><center> "Jika Tidak Sanggup Menahan Lelahnya Belajar, Maka Harus Sanggup Menahan Perihnya Kebodohan" </center></h3></p>
                              </tr> 
                            
                              </thead>
                              <tbody>
                              <br><br><br><br> <center>                           
                              <a class="btn btn-warning" href="<?php echo base_url()."show_siswa/data_nilai";?>">Laporan Nilai</a> || 
                              <a class="btn btn-success" href="<?php echo base_url()."show_siswa/data_guru";?>">Data Guru   </a> || 
                              <a class="btn btn-info" href="<?php echo base_url()."show_siswa/data_siswa";?>">Data Siswa</a>
                                </center>
                              <hr>
                              <hr>
                              <br><br><br>
                              <form id="formKomentar" action="<?php echo base_url()."show_siswa/insert_komentar";?>" method="POST">
                                <div>
                                 <input type="text" name="id_siswa" id="id_siswa" placeholder="ID Siswa" />
                               
                                 <input type="text" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa" />
                                </div>
                                <div>
                                 <textarea name="komentar" id="komentar" rows="7" placeholder="Komentar"></textarea>
                                </div>

                                <div>
                                  <input type="submit" value="Tambahkan Komentar"/>
                                </div>
                              </form>

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
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo base_url('assets/myadmin/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery-ui-1.10.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery-1.8.3.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/myadmin/js/jquery-ui-1.9.2.custom.min.js');?>"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url('assets/myadmin/js/bootstrap.min.js');?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url('assets/myadmin/js/jquery.scrollTo.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url('assets/myadmin/jquery-knob/js/jquery.knob.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery.sparkline.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/myadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/owl.carousel.js');?>" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?php echo base_url('assets/myadmin/js/fullcalendar.min.js');?>"></script> <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assets/myadmin/assets/fullcalendar/fullcalendar/fullcalendar.js');?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('assets/myadmin/js/calendar-custom.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/assets/js/jquery.rateit.min.js');?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('assets/myadmin/js/jquery.customSelect.min.js');?>" ></script>
    <script src="<?php echo base_url('assets/myadmin/assets/chart-master/Chart.js');?>"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url('assets/myadmin/js/scripts.js');?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('assets/myadmin/js/sparkline-chart.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/easy-pie-chart.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery-jvectormap-1.2.2.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery-jvectormap-world-mill-en.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/xcharts.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery.autosize.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery.placeholder.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/gdp-data.js');?>"></script> 
    <script src="<?php echo base_url('assets/myadmin/js/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/sparklines.js');?>"></script>   
    <script src="<?php echo base_url('assets/myadmin/js/charts.js');?>"></script>
    <script src="<?php echo base_url('assets/myadmin/js/jquery.slimscroll.min.js');?>"></script>
    <script src="<?php echo base_url('assets2/js/jquery-1.10.2.js');?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets2/js/bootstrap.min.js');?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets2/js/jquery.metisMenu.js');?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('assets2/js/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets2/js/dataTables/dataTables.bootstrap.js');?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets2/js/custom.js');?>"></script>
    <script src="<?php echo base_url('assets2/js/custom.js');?>"></script>
    <script type="text/javascript">
        function konfrim(){
            var pesan;
            pesan = "Apakah Anda Yakin Akan Menhapus Data Ini?";
            var agree = confirm(pesan);
            if(agree)
                return true;
            else
                return false;
        }
    </script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });



  </script>
</style>
<!--slide show-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container {
        padding: 80px 120px;
    }
    .person {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
    }
    .person:hover {
        border-color: #f1f1f1;
    }
    </style>

    <!--komentar-->
    <style>
    #formKomentar{
      border: 50px solid #d1d1d1;
      width:100px;
      padding:40px;
    }

     input, textarea{
      padding: 10px;
      border:3px solid #e6e6e6;
      border-radius: 5px;
      margin-bottom: 30px; 
     }

     input:focus, textarea:focus{
      border:3px solid #5E4F4F;
     }

     textarea{
      width:700px;
     }

     input[type="submit"]{
      cursor: pointer;
    background: -webkit-linear-gradient(top, #efefef, #ddd);
    background: -moz-linear-gradient(top, #efefef, #ddd);
    background: -ms-linear-gradient(top, #efefef, #ddd);
    background: -o-linear-gradient(top, #efefef, #ddd);
    background: linear-gradient(top, #efefef, #ddd);
    color: #333;
    text-shadow: 0px 1px 1px rgba(255,255,255,1);
    border: 1px solid #ccc;
     }

     input[type="submit"]:hover {
    background: -webkit-linear-gradient(top, #eee, #ccc);
    background: -moz-linear-gradient(top, #eee, #ccc);
    background: -ms-linear-gradient(top, #eee, #ccc);
    background: -o-linear-gradient(top, #eee, #ccc);
    background: linear-gradient(top, #eee, #ccc);
    border: 1px solid #bbb;
  }

  </body>
</html>
    