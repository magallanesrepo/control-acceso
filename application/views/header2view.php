<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Control de Acceso </title>

    <link type="text/css" href="<?php echo base_url(); ?>/../assets/home/css/bootstrap.min.css" rel="stylesheet">

    <link type="text/css" href="<?php echo base_url(); ?>/../assets/home/font-awesome/css/font-awesome.css" rel="stylesheet">
     <link type="text/css" href="<?php echo base_url(); ?>/../assets/home/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link type="text/css"  href="<?php echo base_url(); ?>/../assets/home/css/animate.css" rel="stylesheet">
    <link type="text/css"  href="<?php echo base_url(); ?>/../assets/home/css/style.css" rel="stylesheet">




</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-expand-lg navbar-static-top" role="navigation">
            <!--<div class="navbar-header">-->
                <!--<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">-->
                    <!--<i class="fa fa-reorder"></i>-->
                <!--</button>-->

                <a href="<?php echo site_url('Home') ?>" class="navbar-brand">Control de Acceso</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-reorder"></i>
                </button>

            <!--</div>-->
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav mr-auto">
                   <!-- <li class="active">
                        <a aria-expanded="false" role="button" href="<?php echo site_url('Home') ?>"> Salta</a>
                    </li>-->
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown" > Mantenimiento</a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="<?php echo site_url('General') ?>">Control General</a></li>
                            
                           
                        </ul>
                    </li>
                        <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown" > Procesos</a>
                        <ul role="menu" class="dropdown-menu">
                           <!-- <li><a href="<?php echo site_url('Clientsearch') ?>">Registro de Factura</a></li>
                             <li><a href="<?php echo site_url('Qinvoice') ?>">Impresion de Carnets</a></li>-->
                            <li><a href="<?php echo site_url('Access') ?>">Acceso</a></li>
                           
                        </ul>
                    </li>
                        
                       <!-- <ul role="menu" class="dropdown-menu">
                            <li><a href="<?php echo site_url('General') ?>">Control General</a></li>
                            <li><a href="<?php echo site_url('Towers') ?>">Torres</a></li>
                            <li><a href="">Residencias</a></li>
                         
                            <li><a href="<?php echo site_url('Concepts') ?>">Conceptos</a></li>
                            <li><a href="<?php echo site_url('Users') ?>">Usuarios</a></li>
                        </ul>-->
                    
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Consultas</a>
                        <ul role="menu" class="dropdown-menu">
                           <!-- <li><a href="<?php echo site_url('Qinvoice') ?>">Facturas</a></li>-->
                            <!-- <li><a href="<?php echo site_url('Qlog') ?>">Consulta Diaria</a></li>-->
                            <!--<li><a href="<?php echo site_url('Qaccess') ?>">Accesos</a></li>-->
                           <!-- <li><a href="<?php echo site_url('Expensereg') ?>">Registrar Egresos</a></li>
                            <li><a href="<?php echo site_url('Myinv') ?>">Mis Avisos de Cobro</a></li>-->
                        </ul>
                    </li>
                      <!--<li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Reportes</a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="<?php echo site_url('Invoices') ?>">Avisos de Cobro</a></li>
                            <li><a href="<?php echo site_url('Incomereg') ?>">Registrar Ingresos</a></li>
                            <li><a href="<?php echo site_url('Expensereg') ?>">Registrar Egresos</a></li>
                            <li><a href="<?php echo site_url('Myinv') ?>">Mis Avisos de Cobro</a></li>
                        </ul>
                    </li>-->
                   <!-- <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Consultas</a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                        </ul>
                    </li>-->
                    <!--<li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Reportes</a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                        </ul>
                    </li>-->

                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="<?php echo site_url('Login/logout') ?>">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>