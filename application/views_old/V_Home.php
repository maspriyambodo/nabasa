<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <?php $this->view('Head'); ?>
    <body class=stretched>
        <div id=wrapper class=clearfix>
            <?php $this->view('Header') ?>
            <section id=content>
                <div class=content-wrap>
                    <?php
                    if ($Content == "Home") {
                        $this->view('HomeContent');
                    } elseif ($Content == "Kredibilitas") {
                        $this->view('Kredibilitas');
                    } elseif ($Content == "VisiMisi") {
                        $this->view('VisiMisi');
                    } elseif ($Content == "Mitra") {
                        $this->view('Mitra');
                    } elseif ($Content == "Contact") {
                        $this->view('Contact');
                    } elseif ($Content == "KP74") {
                        $this->view('KP74');
                    } elseif ($Content == "KPegawai") {
                        $this->view('KPegawai');
                    } elseif ($Content == "Wajib") {
                        $this->view('Wajib');
                    } elseif ($Content == "Pinjaman") {
                        $this->view('V_Pinjaman');
                    } else {
                        echo 'error';
                    }
                    ?>
                </div>
            </section>
            <?php $this->view('Footer'); ?>
        </div>
    </body>
</html>