<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Monthly report marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="text-center">
        <h4 class="text-uppercase"><?= date("25/m/Y", strtotime("-1 month")) . " - " . date("d/m/Y"); ?></h4>
    </div>
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
                            GAJI
                        </th>
                        <th class="text-uppercase text-center">
                            INSENTIF
                        </th>
                        <th class="text-uppercase text-center">
                            THP
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
                            <td id="gp" class="gp text-center">
                                <?php
                                $gp = $ReportMonthly->HI / 100;
                                echo $ReportMonthly->penpok * round($gp, 2);
                                ?>
                            </td>
                            <td id="ins" class="ins text-center">
                                <?php
                                if ($ReportMonthly->PLAF <= $ReportMonthly->limit1) {
                                    echo $ReportMonthly->PLAF * $ReportMonthly->persen1;
                                } elseif ($ReportMonthly->PLAF <= $ReportMonthly->limit2) {
                                    echo $ReportMonthly->PLAF * $ReportMonthly->persen2;
                                } elseif ($ReportMonthly->PLAF >= $ReportMonthly->limit3) {
                                    echo $ReportMonthly->PLAF * $ReportMonthly->persen3;
                                }
                                ?>
                            </td>
                            <td id="thp" class="thp text-center">

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function caribtn() {

    }
    window.onload = function () {
        alert('haha');
        document.getElementById('thp').innerHTML === 'kampret';
        $(".gp").number(true, 0);
        $(".ins").number(true, 0);
//        $(".thp").number(true, 0);
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