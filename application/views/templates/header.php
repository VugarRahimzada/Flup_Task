<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url("assets/admin/");?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url("assets/admin/");?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <hr class="sidebar-divider my-0">


            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('payment'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Ödənişlər</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('category'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Kateqoriya</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('currency'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Valyuta</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Payment_type'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Ödəniş Növü</span></a>
            </li>




            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">


                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
            </div>
