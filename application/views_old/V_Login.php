<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>
            <?= $title ?>
        </title>
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel=stylesheet>
        <link href="<?= base_url('assets/css/font-awesome.min.css'); ?>" rel=stylesheet>
        <link href="<?= base_url('assets/css/nprogress.css'); ?>" rel=stylesheet>
        <link href="<?= base_url('assets/css/animate.css'); ?>" rel=stylesheet>
        <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel=stylesheet> </head>

    <body class="login">
        <div class="login_wrapper">
            <div class="animated rubberBand form login_form">
                <section class="login_content">
                    <form action=# method="post">
                        <h1 class="text-uppercase">Login User</h1>
                        <div>
                            <input type=text name=unametxt class=form-control placeholder=Username autocomplete=off required /> 
                        </div>
                        <div>
                            <input type=password name=pwdtxt class=form-control placeholder=Password required /> </div>
                            <input type=submit name=btnsub class="text-uppercase btn btn-default btn-lg" style="color:#FF8F00;" value=Login>
                        <div class=separator>
                            <div> 
                                <a href=https://marsitbangunsejahtera.com/ target=_new> <img src="<?= base_url('assets/images/Logo/PT.Marsit.png'); ?>" class="img-preview img-responsive"/> </a>
                                <div style="clear:both;margin:10px 0"></div>
                                <p>©
                                    <?= date("Y"); ?> All Rights Reserved.<br>
                                    PT MARSIT BANGUN SEJAHTERA
                                </p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/custom.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/fastclick.js'); ?>"></script>
    </body>

</html>
