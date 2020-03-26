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


     <!-- TABLE STYLES-->
    <link href="<?php echo base_url('assets2/js/dataTables/dataTables.bootstrap.css');?>" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="" class="logo">Admin || <span class="lite">KU</span></a>
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
            <a href="<?php echo base_url('dashboard/logout');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
             
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
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Data Guru</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-laptop"></i>Guru</li>                          
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
                             <?php 
                               $no_urut = 0; 
                              ?>
                              <tr><th><i class="icon_profile"></i>No</th> 
                                 <th><i class="icon_profile"></i>ID Guru</th>
                                 <th><i class="icon_profile"></i> Nama Guru </th>
                                 <th><i class="icon_calendar"></i> Mapel</th>
                                 <th><i class="icon_calendar"></i> Kelas</th>
                              
                              </tr> 
                              </thead>
                              <tbody>
                    <?php foreach ($guru->result() as $data){
                                        $no_urut++;
                                        echo "<tr>";
                                        echo "<td>".$no_urut."</td>";
                                        echo "<td>".$data->id_guru."</td>";
                                        echo "<td>".$data->nama_guru."</td>";
                                        echo "<td>".$data->mapel."</td>";
                                        echo "<td>".$data->kelas."</td>";
                                                                             
                                        echo"</tr>";
                  
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

  </body>
</html>
