<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Monthly report marketing</h2>
        <ul class="nav navbar-right panel_toolbox">

        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="text-uppercase">jan</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="text-uppercase">feb</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="text-uppercase">mar</a>
                </li>

                <li role="presentation" class="">
                    <a href="#tab_content4" id="tab" role="tab" data-toggle="tab" aria-expanded="true" class="text-uppercase">apr</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content5" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="text-uppercase">mei</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="text-uppercase">jun</a>
                </li>

                <li role="presentation" class="">
                    <a href="#tab_content7" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" class="text-uppercase">jul</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content8" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="text-uppercase">ags</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content9" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="text-uppercase">sep</a>
                </li>

                <li role="presentation" class="">
                    <a href="#tab_content10" id="tab" role="tab" data-toggle="tab" aria-expanded="true" class="text-uppercase">okt</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content11" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false" class="text-uppercase">nov</a>
                </li>
                <li role="presentation" class="">
                    <a href="#tab_content12" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false" class="text-uppercase">des</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($jan as $jan) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $jan->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($jan->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                       <!-- <?= $jan->HP ?> -->
                                       100
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($jan->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $jan->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($jan->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($jan->tot / $jan->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($jan->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($feb as $feb) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $feb->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($feb->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $feb->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($feb->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $feb->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($feb->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($feb->tot / $feb->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($feb->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($mar as $mar) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $mar->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($mar->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $mar->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($mar->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $mar->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($mar->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($mar->tot / $mar->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($mar->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($apr as $apr) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $apr->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($apr->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $apr->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($apr->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $apr->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($apr->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($apr->tot / $apr->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($apr->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($mei as $mei) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $mei->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($mei->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $mei->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($mei->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $mei->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($mei->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($mei->tot / $mei->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($mei->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($jun as $jun) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $jun->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($jun->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $jun->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($jun->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $jun->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($jun->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($jun->tot / $jun->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($jun->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($jul as $jul) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $jul->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($jul->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $jul->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($jul->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $jul->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($jul->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($jul->tot / $jul->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($jul->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content8" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($ags as $ags) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $ags->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($ags->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $ags->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($ags->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $ags->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($ags->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($ags->tot / $ags->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($ags->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content9" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($sep as $sep) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $sep->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($sep->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $sep->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($sep->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $sep->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($sep->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($sep->tot / $sep->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($sep->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content10" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($okt as $okt) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $okt->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($okt->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $okt->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($okt->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $okt->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($okt->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($okt->tot / $okt->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($okt->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content11" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($nov as $nov) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $nov->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($nov->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $nov->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($nov->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $nov->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($nov->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($nov->tot / $nov->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($nov->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--============================================================================================-->
                <div role="tabpanel" class="tab-pane fade" id="tab_content12" aria-labelledby="tab">
                    <table class="table table-responsive table-bordered table-striped table-hover" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center" colspan="2">
                                    sales
                                </th>
                                <th class="text-uppercase text-center" colspan="2">
                                    marketing
                                </th>
                                <th class="text-uppercase text-center" colspan="3">
                                    RASIO
                                </th>
                            </tr>
                            <tr>
                                <th class="text-uppercase text-center">
                                    sales
                                </th>
                                <th class="text-uppercase text-center">
                                    interaksi
                                </th>
                                <th class="text-uppercase text-center">
                                    r i
                                </th>
                                <th class="text-uppercase text-center">
                                    h i
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
                            <?php foreach ($des as $des) { ?>
                                <tr>
                                    <td id="namasales">
                                        <?= $des->NAMASALES ?>
                                    </td>
                                    <td id="idtotint">
                                        <?= ceil($des->TOTAL) ?>
                                    </td>
                                    <td id="tothp">
                                        <?= $des->HP ?>
                                    </td>
                                    <td id="tottb">
                                        <?php
                                        if ($des->plafond == "") {
                                            echo "Rp. 0";
                                        } else {
                                            echo $des->plafond;
                                        }
                                        ?>
                                    </td>
                                    <td id="efisiensi" class="text-center">
                                        <?= ceil($des->TOTAL) . " %" ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($des->tot / $des->TOTAL * 100) . " %"; ?>
                                    </td>
                                    <td class="text-center">
                                        <?= round($des->tot / 100 * 100) . " %"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="separator"></div>
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