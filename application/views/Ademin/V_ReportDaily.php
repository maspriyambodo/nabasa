<div class="x_panel">
    <div class="x_title">
        <div class="clearfix"></div>
        <h4 class="text-uppercase">daily report marketings</h4>
        <ul class="nav navbar-right panel_toolbox">

        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">SENIN</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">SELASA</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">RABU</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">KAMIS</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">JUMAT</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <div class="separator"></div>
                    <div class="clearfix"></div>
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center text-uppercase" style="vertical-align:middle;">sales</th>
                                <th colspan="2" class="text-center text-uppercase">rencana</th>
                                <th class="text-center text-uppercase" colspan="3">rasio</th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    rencana interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    hasil interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    efisiensi
                                </th>
                                <th class="text-uppercase text-center">
                                    efektifitas
                                </th>
                                <th class="text-uppercase text-center">
                                    produktifitas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($senin as $senin) { ?>
                                <tr>
                                    <td>
                                        <?= $senin->NAMASALES ?>
                                    </td>
                                    <td class="text-center"> 10 </td>
                                    <td>
                                        <?= $senin->jumlah ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($senin->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($senin->jumlah >= 6 && $senin->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $senin->jumlah * 10 . "%" ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $senin->jumlah * 10 ?>%;">
                                                 <?php
                                                 if ($senin->jumlah >= 10) {
                                                     echo '100 %';
                                                 } else {
                                                     echo $senin->jumlah * 10 . " % ";
                                                 }
                                                 ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($senin->plaf / $senin->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($senin->plaf / $senin->jumlah >= 6 || $senin->plaf / $senin->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $senin->plaf / $senin->jumlah; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($senin->plaf / $senin->jumlah <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $senin->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $senin->plaf / $senin->jumlah . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($senin->plaf / 10 <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($senin->plaf / 10 >= 6 || $senin->plaf / 10 <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $senin->plaf / 10; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($senin->plaf <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $senin->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $senin->plaf / 10 . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center text-uppercase" style="vertical-align:middle;">sales</th>
                                <th colspan="2" class="text-center text-uppercase">rencana</th>
                                <th class="text-center text-uppercase" colspan="3">rasio</th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    rencana interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    hasil interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    efisiensi
                                </th>
                                <th class="text-uppercase text-center">
                                    efektifitas
                                </th>
                                <th class="text-uppercase text-center">
                                    produktifitas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($selasa as $selasa) { ?>
                                <tr>
                                    <td>
                                        <?= $selasa->NAMASALES ?>
                                    </td>
                                    <td class="text-center"> 10 </td>
                                    <td>
                                        <?= $selasa->jumlah ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($selasa->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($selasa->jumlah >= 6 && $selasa->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $selasa->jumlah * 10 . "%" ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $selasa->jumlah * 10 ?>%;">
                                                 <?php
                                                 if ($selasa->jumlah >= 10) {
                                                     echo '100 %';
                                                 } else {
                                                     echo $selasa->jumlah * 10 . " % ";
                                                 }
                                                 ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($selasa->plaf / $selasa->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($selasa->plaf / $selasa->jumlah >= 6 || $selasa->plaf / $selasa->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $selasa->plaf / $selasa->jumlah; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($selasa->plaf / $selasa->jumlah <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $selasa->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $selasa->plaf / $selasa->jumlah . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($selasa->plaf / 10 <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($selasa->plaf / 10 >= 6 || $selasa->plaf / 10 <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $selasa->plaf / 10; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($selasa->plaf <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $selasa->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $selasa->plaf / 10 . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center text-uppercase" style="vertical-align:middle;">sales</th>
                                <th colspan="2" class="text-center text-uppercase">rencana</th>
                                <th class="text-center text-uppercase" colspan="3">rasio</th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    rencana interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    hasil interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    efisiensi
                                </th>
                                <th class="text-uppercase text-center">
                                    efektifitas
                                </th>
                                <th class="text-uppercase text-center">
                                    produktifitas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rabu as $rabu) { ?>
                                <tr>
                                    <td>
                                        <?= $rabu->NAMASALES ?>
                                    </td>
                                    <td class="text-center"> 10 </td>
                                    <td>
                                        <?= $rabu->jumlah ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($rabu->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($rabu->jumlah >= 6 && $rabu->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $rabu->jumlah * 10 . "%" ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $rabu->jumlah * 10 ?>%;">
                                                 <?php
                                                 if ($rabu->jumlah >= 10) {
                                                     echo '100 %';
                                                 } else {
                                                     echo $rabu->jumlah * 10 . " % ";
                                                 }
                                                 ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($rabu->plaf / $rabu->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($rabu->plaf / $rabu->jumlah >= 6 || $rabu->plaf / $rabu->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $rabu->plaf / $rabu->jumlah; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($rabu->plaf / $rabu->jumlah <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $rabu->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $rabu->plaf / $rabu->jumlah . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($rabu->plaf / 10 <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($rabu->plaf / 10 >= 6 || $rabu->plaf / 10 <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $rabu->plaf / 10; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($rabu->plaf <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $rabu->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $rabu->plaf / 10 . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center text-uppercase" style="vertical-align:middle;">sales</th>
                                <th colspan="2" class="text-center text-uppercase">rencana</th>
                                <th class="text-center text-uppercase" colspan="3">rasio</th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    rencana interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    hasil interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    efisiensi
                                </th>
                                <th class="text-uppercase text-center">
                                    efektifitas
                                </th>
                                <th class="text-uppercase text-center">
                                    produktifitas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kamis as $kamis) { ?>
                                <tr>
                                    <td>
                                        <?= $kamis->NAMASALES ?>
                                    </td>
                                    <td class="text-center"> 10 </td>
                                    <td>
                                        <?= $kamis->jumlah ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($kamis->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($kamis->jumlah >= 6 && $kamis->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $kamis->jumlah * 10 . "%" ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $kamis->jumlah * 10 ?>%;">
                                                 <?php
                                                 if ($kamis->jumlah >= 10) {
                                                     echo '100 %';
                                                 } else {
                                                     echo $kamis->jumlah * 10 . " % ";
                                                 }
                                                 ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($kamis->plaf / $kamis->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($kamis->plaf / $kamis->jumlah >= 6 || $kamis->plaf / $kamis->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $kamis->plaf / $kamis->jumlah; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($kamis->plaf / $kamis->jumlah <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $kamis->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $kamis->plaf / $kamis->jumlah . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($kamis->plaf / 10 <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($kamis->plaf / 10 >= 6 || $kamis->plaf / 10 <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $kamis->plaf / 10; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($kamis->plaf <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $kamis->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $kamis->plaf / 10 . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center text-uppercase" style="vertical-align:middle;">sales</th>
                                <th colspan="2" class="text-center text-uppercase">rencana</th>
                                <th class="text-center text-uppercase" colspan="3">rasio</th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    rencana interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    hasil interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    efisiensi
                                </th>
                                <th class="text-uppercase text-center">
                                    efektifitas
                                </th>
                                <th class="text-uppercase text-center">
                                    produktifitas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jumat as $jumat) { ?>
                                <tr>
                                    <td>
                                        <?= $jumat->NAMASALES ?>
                                    </td>
                                    <td class="text-center"> 10 </td>
                                    <td>
                                        <?= $jumat->jumlah ?>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($jumat->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($jumat->jumlah >= 6 && $jumat->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $jumat->jumlah * 10 . "%" ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $jumat->jumlah * 10 ?>%;">
                                                 <?php
                                                 if ($jumat->jumlah >= 10) {
                                                     echo '100 %';
                                                 } else {
                                                     echo $jumat->jumlah * 10 . " % ";
                                                 }
                                                 ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($jumat->plaf / $jumat->jumlah <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($jumat->plaf / $jumat->jumlah >= 6 || $jumat->plaf / $jumat->jumlah <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $jumat->plaf / $jumat->jumlah; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($jumat->plaf / $jumat->jumlah <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $jumat->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $jumat->plaf / $jumat->jumlah . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="
                                            <?php
                                            if ($jumat->plaf / 10 <= 5) {
                                                echo 'progress-bar-danger';
                                            } elseif ($jumat->plaf / 10 >= 6 || $jumat->plaf / 10 <= 9) {
                                                echo 'progress-bar-warning';
                                            } else {
                                                echo 'progress-bar-success';
                                            }
                                            ?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?= $jumat->plaf / 10; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php
                                                 if ($jumat->plaf <= 6) {
                                                     echo 100;
                                                 } else {
                                                     echo $jumat->jumlah;
                                                 }
                                                 ?>%;">
                                                 <?= $jumat->plaf / 10 . "%" ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class=separator>

        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('table').dataTable({
            responsive: true,
            "paging": true,
            "ordering": true,
            "info": true
        });
    };
</script>