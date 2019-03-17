<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="<?= base_url('assets/images/Logo/PT.Marsit.jpg'); ?>" type="image/ico" />
        <title class="text-uppercase">
            <?= $title ?>
        </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
        <link href="<?= base_url('assets/css/green.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets/css/daterangepicker.css'); ?>" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel=stylesheet type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" />
        <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel="stylesheet">
        <style type=text/css>
            .dataTables_filter {
                width: auto
            }
        </style>
    </head>
    <body class=nav-md>
        <div class="container body">
            <div class=main_container>
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class=clearfix></div>
                        <div class="profile clearfix">
                            <div class=profile_pic> <img src="<?= base_url($pict); ?>" class="img-circle profile_img img-rounded"> </div>
                            <div class=profile_info> <span>Welcome,</span>
                                <h2 class=text-uppercase><?= $uname; ?></h2> </div>
                        </div>
                        <br />
                        <div id=sidebar-menu class="main_menu_side hidden-print main_menu">
                            <div class=menu_section>
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a class="text-uppercase" href="<?= base_url('Admin/Dashboard/index'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                    <li><a class="text-uppercase" href="<?= base_url('Admin/Kodepos'); ?>"><i class="glyphicon glyphicon-envelope"></i> Kodepos</a></li>
                                    <li><a class="text-uppercase" href=<?= base_url('Admin/Sales'); ?>><i class="glyphicon glyphicon-user"></i> Sales</a></li>
                                    <li><a class="text-uppercase" href=<?= base_url('Admin/Salesarea'); ?>><i class="glyphicon glyphicon-globe"></i> Sales Area</a></li>
                                    <li><a class="text-uppercase" href=<?= base_url('Admin/Nasabah'); ?>><i class="glyphicon glyphicon-list-alt"></i> Nasabah</a></li>
                                    <li><a class="text-uppercase" href=<?= base_url('Admin/KodeInteraksi'); ?>><i class="glyphicon glyphicon-pencil"></i> Kode Interaksi</a></li>
                                    <?php
                                    if ($this->session->userdata('hakakses') == 1) {
                                        echo '<li><a class="text-uppercase" href=' . base_url('HRIS/Karyawan/index') . '><i class="glyphicon glyphicon-pencil"></i> Karyawan</a></li>';
                                    }
                                    ?>
<!--                                    <li><a><i class="fa fa-exchange"></i> Rencana <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href=<?= base_url('Admin/Rencanamarketing'); ?>>Marketing</a></li>
                                    <li><a href=<?= base_url('Admin/Rencanatelemarketing'); ?>>Telemarketing</a></li>
                                </ul>
                            </li>-->
                                    <li <?php
                                    if ($this->session->userdata('hakakses') != 3) {
                                        echo 'class="hide"';
                                    }
                                    ?>><a><i class="glyphicon glyphicon-star-empty"></i> Marketing <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('Marketing/Marketing/index'); ?>" class="text-uppercase">Kunjungan</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Report <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
<!--                                            <li><a href="<?= base_url('Admin/ReportDaily'); ?>" class="text-uppercase">Laporan Harian Marketing</a></li>
                                            <li><a href="<?= base_url('Admin/MonthlyReport'); ?>" class="text-uppercase">Laporan Bulanan Marketing</a></li>-->
                                            <li><a href="<?= base_url('Admin/ReportMonthly'); ?>" class="text-uppercase">Laporan Bulanan</a></li>
                                            <li><a href="<?= base_url('Admin/Rencanaharian'); ?>" class="text-uppercase">Laporan Rencana Harian</a></li>
                                            <li><a href="<?= base_url('Admin/Lapmarketing'); ?>" class="text-uppercase">Laporan Interaksi Marketing</a></li>
                                            <li><a href="<?= base_url('Admin/Laptele'); ?>" class="text-uppercase">Laporan Interaksi Telemarketing</a></li>
                                            <li><a href="<?= base_url('Admin/Salary/index'); ?>" class="text-uppercase">Salary</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=top_nav>
                    <div class=nav_menu>
                        <nav>
                            <div class="nav toggle"> <a id=menu_toggle><i class="fa fa-bars"></i></a> </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class> <a href=javascript: class="text-uppercase user-profile dropdown-toggle" data-toggle=dropdown aria-expanded=false> <img src="<?= base_url($pict); ?>"><?= $uname; ?> <span class="fa fa-angle-down"></span> </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="<?= base_url('Admin/Dashboard/Logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=right_col role=main>