<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel=icon href="<?= base_url('assets/images/Logo/PT.Marsit.jpg'); ?>" type=image/ico />
        <title>
            <?= $title ?>
        </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel=stylesheet integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/scroller/1.4.4/css/scroller.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/css/green.css'); ?>" rel=stylesheet>
        <link href="<?= base_url('assets/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel=stylesheet>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel=stylesheet />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel=stylesheet type=text/css />
        <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel=stylesheet>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css" rel=stylesheet type="text/css" />
        <link href="<?= base_url('assets/css/basic.css'); ?>" rel=stylesheet type="text/css" />
        <link href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css" rel=stylesheet type="text/css" />
        <link href=https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css rel=stylesheet type="text/css" />
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
                            <div class=profile_pic> <img src="<?= base_url($this->session->userdata('gambar')); ?>" class="img-circle profile_img img-rounded"> </div>
                            <div class=profile_info> <span>Selamat Datang,</span>
                                <h2 class=text-uppercase><?= $this->session->userdata('nama'); ?></h2> </div>
                        </div>
                        <br />
                        <div id=sidebar-menu class="main_menu_side hidden-print main_menu">
                            <div class=menu_section>
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li>
                                        <a class="text-uppercase"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('Marketing/Marketing/index'); ?>" class="text-uppercase">Cari data</a></li>
<!--                                            <li><a href="<?= base_url('Marketing/Dashboard/index'); ?>" class="text-uppercase">Rencana Kunjungan</a></li>-->
                                            <li><a href="<?= base_url('Marketing/Dashboard/Daftarkunjungan'); ?>" class="text-uppercase">Daftar Kunjungan</a></li>
                                            <li><a href="<?= base_url('Marketing/Dashboard/OTS'); ?>" class="text-uppercase">Interaksi non database</a></li>
<!--                                            <li><a href="<?= base_url('Marketing/Dashboard/DataSearch'); ?>">Cari data pensiunan</a></li>-->
                                        </ul>
                                    </li>
                                    <li <?php
                                    if ($this->session->userdata('hakakses') != 3) {
                                        echo 'class="hide"';
                                    }
                                    ?>>
                                        <a class="text-uppercase"><i class="glyphicon glyphicon-star"></i> Supervisor <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?= base_url('Admin/Dashboard/index'); ?>" class="text-uppercase">Dashboard</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="text-uppercase"><i class="fa fa-shopping-cart"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li>
                                                <a href="<?= base_url('Marketing/Dashboard/Pencairan'); ?>" class="text-uppercase">Pencairan</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('Marketing/Simulasi'); ?>" class="text-uppercase"> simulasi </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="text-uppercase"><i class="fa fa-briefcase text-uppercase"></i> laporan <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li>
                                                <a href="<?= base_url('Marketing/Dashboard/Hotprospek'); ?>" class="text-uppercase">HOT prospek</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('Marketing/Dashboard/Hasilpencairan'); ?>" class="text-uppercase">hasil Pencairan</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('Marketing/Dashboard/Hasilinteraksi'); ?>" class="text-uppercase">Hasil Interaksi</a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('Marketing/Dashboard/Hasilsimulasi'); ?>" class="text-uppercase">Hasil Simulasi</a>
                                            </li>
                                            <!--                                            <li>
                                                                                            <a href="<?= base_url('Marketing/Dashboard/Insentif'); ?>">Insentif</a>
                                                                                        </li>-->
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
                                <li class> <a href=javascript: class="text-uppercase user-profile dropdown-toggle" data-toggle=dropdown aria-expanded=false> <img src="<?= base_url($this->session->userdata('gambar')); ?>"><?= $this->session->userdata('nama'); ?> <span class="fa fa-angle-down"></span> </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="<?= base_url('Marketing/Dashboard/Logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class=right_col role=main>