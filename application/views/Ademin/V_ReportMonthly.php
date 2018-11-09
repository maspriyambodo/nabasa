<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Monthly report marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="text-center">
        <h4 class="text-uppercase"><?= date("25/m/Y", strtotime("-1 month")) . " - " . date("d/m/Y"); ?></h4>
    </div>

    <!--    <div class="x_content">
    
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="">
                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Jan</a>
                    </li>
    
                    <li role="presentation" class="">
                        <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Feb</a>
                    </li>
    
                    <li role="presentation" class="">
                        <a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Mar</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Apr</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Mei</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Jun</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content7" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Jul</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content8" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Ags</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content9" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sep</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content10" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Okt</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content11" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Nov</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab_content12" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Des</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in" id="tab_content1" aria-labelledby="home-tab">
    
                    </div>
    
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content9" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content10" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content11" aria-labelledby="profile-tab">
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content12" aria-labelledby="profile-tab">
    
                    </div>
                </div>
            </div>
        </div>-->

    <div class="x_content">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center">
                            NO
                        </th>
                        <th class="text-uppercase text-center">
                            SALES
                        </th>
                        <th class="text-uppercase text-center">
                            BRANCH
                        </th>
                        <th class="text-uppercase text-center">
                            JOB DATE
                        </th>
                        <th class="text-uppercase text-center">
                            CWD
                        </th>
                        <th class="text-uppercase text-center">
                            RI
                        </th>
                        <th class="text-uppercase text-center">
                            HI
                        </th>
                        <th class="text-uppercase text-center">
                            HP
                        </th>
                        <th class="text-uppercase text-center">
                            CLN
                        </th>
                        <th class="text-uppercase text-center">
                            EFISIENSI
                        </th>
                        <th class="text-uppercase text-center">
                            EFEKTIFITAS
                        </th>
                        <th class="text-uppercase text-center">
                            PRODUKTIFITAS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ReportMonthly->result() as $ReportMonthly) { ?>
                        <tr
                        <?php
                        if ($ReportMonthly->norut == FALSE) {
                            echo 'class="hide"';
                        }
                        ?>>
                            <td>
                                <?= $ReportMonthly->norut ?>
                            </td>
                            <td class="text-uppercase">
                                <?= $ReportMonthly->uname ?>
                            </td>
                            <td>
                                <?= $ReportMonthly->LOKASI_KERJA ?>
                            </td>
                            <td>
                                <?php
                                if ($ReportMonthly->norut == FALSE) {
                                    echo '';
                                } else {
                                    $dStart = new DateTime($ReportMonthly->TANGGAL_MASUK);
                                    $dEnd = new DateTime(date("Y-m-d"));
                                    $dDiff = $dStart->diff($dEnd);
                                    echo $ReportMonthly->TANGGAL_MASUK . "<br>";
                                    $year = floor($dDiff->days / 365);
                                    $months = floor($dDiff->days / 30);
                                    $days = $dDiff->days - ($months * 30);
                                    $dif = $months - ($year * 12);
                                    if ($year > 0) {
                                        echo " ( " . $year . " th " . $dif . "bln " . " )";
                                    } else {
                                        echo " ( " . $months . "bln " . " )";
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($ReportMonthly->RI < 15) {
                                    echo '0';
                                } else {
                                    $cwd = $ReportMonthly->RI / 15;
                                    echo floor($cwd);
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <?= $ReportMonthly->RI ?>
                            </td>
                            <td class="text-center">
                                <?= $ReportMonthly->HI ?>
                            </td>
                            <td class="text-center">
                                <?= $ReportMonthly->HP ?>
                            </td>
                            <td class="text-center">
                                <?= $ReportMonthly->PLAF ?>
                            </td>
                            <td class="text-center">
                                <?php
                                if (date("l") == "SUNDAY") {
                                    $ri = date("d") * 15 - 10;
                                } else {
                                    $ri = date("d") * 15;
                                }
                                if ($ReportMonthly->HI / $ri * 100 > 100) {
                                    echo '100 %';
                                } else {
                                    echo round($ReportMonthly->HI / $ri * 100, 2) . " %";
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                if ($ReportMonthly->PLAF == 0) {
                                    echo '0%';
                                } else {
                                    echo round($ReportMonthly->PLAF / $ReportMonthly->HI, 2) . " %";
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                if (date("l") == "SUNDAY") {
                                    $ri = date("d") * 15 - 10;
                                } else {
                                    $ri = date("d") * 15;
                                }
                                ?>
                                <?= round($ReportMonthly->PLAF / $ri, 2) * 100 . " %" ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Search History</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label class="text-uppercase">from</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="tgltxt">
                                <option value="">Pilih Tanggal</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="blntxt">
                                <option value="">Pilih Bulan</option>
                                <option value="1">JANUARI</option>
                                <option value="2">FEBRUARI</option>
                                <option value="3">MARET</option>
                                <option value="4">APRIL</option>
                                <option value="5">MEI</option>
                                <option value="6">JUNI</option>
                                <option value="7">JULI</option>
                                <option value="8">AGUSTUS</option>
                                <option value="9">SEPTEMBER</option>
                                <option value="10">OKTOBER</option>
                                <option value="11">NOVEMBER</option>
                                <option value="12">DESEMBER</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="thntxt">
                                <option value="">Pilih Tahun</option>
                                <option value="1"><?= date("Y", strtotime("- 5 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 4 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 3 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 2 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 1 year")); ?></option>
                                <option value="1"><?= date("Y"); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label class="text-uppercase">to</label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="tgl1txt">
                                <option value="">Pilih Tanggal</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="bln1txt">
                                <option value="">Pilih Bulan</option>
                                <option value="1">JANUARI</option>
                                <option value="2">FEBRUARI</option>
                                <option value="3">MARET</option>
                                <option value="4">APRIL</option>
                                <option value="5">MEI</option>
                                <option value="6">JUNI</option>
                                <option value="7">JULI</option>
                                <option value="8">AGUSTUS</option>
                                <option value="9">SEPTEMBER</option>
                                <option value="10">OKTOBER</option>
                                <option value="11">NOVEMBER</option>
                                <option value="12">DESEMBER</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="thn1txt">
                                <option value="">Pilih Tahun</option>
                                <option value="1"><?= date("Y", strtotime("- 5 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 4 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 3 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 2 year")); ?></option>
                                <option value="1"><?= date("Y", strtotime("- 1 year")); ?></option>
                                <option value="1"><?= date("Y"); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="form-group">
                <button class="btn btn-success text-uppercase" type="button" onclick="caribtn()" name="caribtn">cari</button>
            </div>
        </div>
    </div>
</div>-->
<script>
    function caribtn() {
        
    }
    window.onload = function () {
        $('.table').DataTable({
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "scrollY": "300px",
            "scrollCollapse": true,
            responsive: true,
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'copyHtml5', footer: true
                },
                {
                    extend: 'excelHtml5', footer: true
                },
                {
                    extend: 'csvHtml5', footer: true
                },
                {
                    extend: 'pdfHtml5', footer: true
                },
                {
                    extend: 'print',
                    title: "REPORT MARKETING <?= "25/" . date("m/Y", strtotime("- 1 month")) . " - " . date("d/m/Y") ?>",
                    pageSize: 'A4',
                    orientation: 'landscape',
                    customize: function (win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).find('h1').css('font-size', '12pt');
                        $(win.document.body).find('th').addClass('display').css('text-align', 'center');
                        $(win.document.body).css('font-size', '10pt');
                        $(win.document.body).css('background-color', 'white');
                        $(win.document.body).css('margin', '1px');
                    }
                }
            ]
        });
    };
</script>