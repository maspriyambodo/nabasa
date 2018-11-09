<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Monthly report marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="text-center">
        <h4 class="text-uppercase"><?= date("F Y"); ?></h4>
    </div>
    <div class="x_content">
        <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
            <thead>
                <tr>
                    <th class="text-uppercase text-center">
                        NO
                    </th>
                    <th class="text-uppercase text-center">
                        SALES
                    </th>
                    <th class="text-uppercase text-center">
                        PLACEMENT
                    </th>
                    <th class="text-uppercase text-center">
                        JOB DATE
                    </th>
                    <th class="text-uppercase text-center">
                        R I
                    </th>
                    <th class="text-uppercase text-center">
                        H I
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
                    <tr>
                        <td>
                            <?= $ReportMonthly->row_number ?>
                        </td>
                        <td class="text-uppercase">
                            <?= $ReportMonthly->NAMASALES ?>
                        </td>
                        <td>
                            <?= $ReportMonthly->LOKASI_KERJA ?>
                        </td>
                        <td class="text-uppercase text-center">
                            <?php
                            $dStart = new DateTime($ReportMonthly->TANGGAL_MASUK);
                            $dEnd = new DateTime(date("Y-m-d"));
                            $dDiff = $dStart->diff($dEnd);
                            echo $ReportMonthly->TANGGAL_MASUK . "<br>";
                            $months = floor($dDiff->days / 30);
                            $days = $dDiff->days - ($months * 30);
                            echo " ( " . $months . " Months " . $days . " days" . " )";
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if (date("l") == "SUNDAY") {
                                echo date("d") * 15 - 10;
                            } else {
                                echo date("d") * 15;
                            }
                            ?>
                        </td>
                        <td class="text-center">
                            <?= $ReportMonthly->HI ?>
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
                            <?= round($ReportMonthly->PLAF / $ReportMonthly->HI, 2) * 100 . " %" ?>
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
<script>
    window.onload = function () {
        $('.table').DataTable({
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
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
                    title: "REPORT MARKETING | UNTIL DATE" + " " + new Date().format("d-m-Y"),
                    pageSize: 'A4',
                    customize: function (win) {
                        $(win.document.body).append('<div style="clear:both;margin:10% 0px"></div><div class="row"><div class="col-md-4"></div><div class="col-md-4"></div><div class="col-md-4"><div style="clear:both;margin:10px 0px"><p class="text-center"> Jakarta, <?= date("d F Y"); ?></p></div></div></div><div class="row"><div class="col-md-4"><div class="text-center"><p class="text-uppercase"> disetujui oleh</p><div style="margin:100px 0px"></div><p class="text-uppercase"> ( MARULI TUA H. SITOHANG, SE. MM )</p></div></div><div class="col-md-4"><div class="text-center"><p class="text-uppercase"> diperiksa oleh</p><div style="margin:100px 0px"></div><p class="text-uppercase"> ( M. BRIAN A )</p></div></div><div class="col-md-4"><div class="text-center"><p class="text-uppercase"> dibuat oleh</p><div style="margin:100px 0px;margin-right:50%;"></div><p class="text-uppercase"> ( <?= $this->session->userdata('nama'); ?> )</p></div></div></div>');
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).find('h1').css('font-size', '12pt');
                        $(win.document.body).find('th').addClass('display').css('text-align', 'center');
                        $(win.document.body).css('font-size', '12pt');
                        $(win.document.body).css('background-color', 'white');
                    }
                }
            ],
            responsive: true
        });
    };
</script>