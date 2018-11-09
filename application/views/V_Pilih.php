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

    <body>
        <div style="clear:both;margin:15% 0px;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="thumbnail text-center">
                        <a href="<?= base_url('Login/Checkmasuk'); ?>">
                            <img src="<?= base_url('assets/images/Logo/nabasa.png'); ?>" class="img-responsive img-preview img-container">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail text-center">
                        <a href="<?= base_url('marsit/Login/Checkmasuk'); ?>">
                            <img src="<?= base_url('assets/images/Logo/PT.Marsit.jpg'); ?>" class="img-responsive img-preview img-container">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/custom.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/fastclick.js'); ?>"></script>
    </body>

</html>
