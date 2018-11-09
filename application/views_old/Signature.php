<html>
    <head>
        <title>tanda tangan</title>
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>
            Draw over image
        </h1>
        <div class="container">
            <div class="text-center">
                <canvas id="signature-pad" class="signature-pad panel panel-default" style="width:auto;"></canvas>
                <img src="data:image/png;base64,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" class="thumbnail">
            </div>
        </div>
        <div>
            <button id="save">Save</button>
            <button id="clear">Clear</button>
        </div>
        <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
        <script type="text/javascript">
            var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                backgroundColor: 'rgba(255, 255, 255, 0)',
                penColor: 'rgb(0, 0, 0)'
            });
            var saveButton = document.getElementById('save');
            var cancelButton = document.getElementById('clear');

            saveButton.addEventListener('click', function (event) {
                var data = signaturePad.toDataURL('image/png');

// Send data to server instead...
                window.open(data);
            });

            cancelButton.addEventListener('click', function (event) {
                signaturePad.clear();
            });
        </script>
    </body>
</html>