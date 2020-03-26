<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()."assets/myadmin/img/favicon.png";?>">

    <title>Login SekolahKU</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css";?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()."assets/css/bootstrap-theme.css";?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()."assets/css/elegant-icons-style.css";?>" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/css/font-awesome.css";?>" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()."assets/css/style.css";?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/style-responsive.css";?>" rel="stylesheet" />

   
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url('assets/myadmin/css/elegant-icons-style.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/myadmin/css/font-awesome.min.css');?>" rel="stylesheet" />    
   
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url('assets2/js/dataTables/dataTables.bootstrap.css');?>" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
  
  <body class="login-img3-body">
    
            <p class="login-img"><h1><center><span style="background-color:white; border-radius: 5px;">Sistem Informasi Nilai Siswa SD</span></center></h1></p>
        

      <form class="login-form" style="border-radius: 10px" action="<?php echo base_url()."/login/chek_login";?>"  method="POST">    
        <div class="login-wrap">
            <p class="login-img"><h3><center>Masukkan Username dan Password</center></h3></p><br>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> </a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="login">Login</button>
        </div>
      </form>

    </div>


  </body>
</html>
