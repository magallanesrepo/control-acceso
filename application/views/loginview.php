<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="<?php echo base_url(); ?>/../assets/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/../assets/home/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/../assets/home/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/../assets/home/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

             <!--   <h1 class="logo-name">IN+</h1>-->

            </div>
            <img style="width:100%" src="<?php echo base_url(); ?>/../assets/images/LOGO-FINAL-PNG.png">
           <!-- <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
               
            </p>-->
           <!-- <p>Login in. To see it in action.</p>-->
            <span style="color:red"><?php echo $this->session->flashdata('msg');?></span> 
            <form class="m-t" role="form" action="<?php echo site_url('Login/auth') ?>" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar Sesion</button>

               <!-- <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
            </form>
          <!--  <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>-->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>/../assets/home/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/../assets/home/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/../assets/home/js/bootstrap.js"></script>

</body>

</html>
