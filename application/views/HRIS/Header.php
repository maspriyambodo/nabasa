<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="<?= base_url('assets/images/Logo/PT.Marsit.jpg'); ?>" type="image/ico" />
        <title>
            <?= $title ?>
        </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.4.0/r-2.2.2/rg-1.0.3/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
        <link href="<?= base_url('assets/css/green.css'); ?>" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-progressbar/0.9.0/bootstrap-progressbar.min.js" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel="stylesheet">
        <style type=text/css>
            .dataTables_filter {
                width: auto
            }
            input{
                text-transform: uppercase;
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
                                <h3>H R I S</h3>
                                <ul class="nav side-menu">
                                    <li><a href="<?= base_url('HRIS/Dashboard/index'); ?>" class="text-uppercase"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                    <li><a class="text-uppercase"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('HRIS/Karyawan/'); ?>" class="text-uppercase">Data Karyawan</a></li>
                                            <li><a href="<?= base_url('HRIS/Karyawan/NonKaryawan'); ?>" class="text-uppercase">Data Karyawan Non-Aktif</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav side-menu">
                                    <li><a class="text-uppercase"><i class="fa fa-calendar"></i> kalendar <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('HRIS/Kalendar/Cuti'); ?>" class="text-uppercase"> cuti </a></li>
                                            <li><a href="<?= base_url('HRIS/Kalendar/Absen'); ?>" class="text-uppercase"> absen </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav side-menu">
                                    <li><a class="text-uppercase"><i class="fa fa-building"></i> perusahaan <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#" class="text-uppercase"> profil </a></li>
                                            <li><a href="#" class="text-uppercase"> peraturan </a></li>
                                            <li><a href="#" class="text-uppercase"> broadcast </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav side-menu">
                                    <li><a class="text-uppercase"><i class="fa fa-ellipsis-h"></i> lainnya <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#" class="text-uppercase"> laporan absensi </a></li>
                                            <li><a href="#" class="text-uppercase"> surat keterangan </a></li>
                                            <li><a href="#" class="text-uppercase"> helpdesk hr </a></li>
                                            <li><a href="#" class="text-uppercase"> kartu nama </a></li>
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
                                        <li><a href="<?= base_url('HRIS/Dashboard/Logout'); ?>" class="text-uppercase"><i class="fa fa-sign-out pull-right"></i> logout </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=right_col role=main>