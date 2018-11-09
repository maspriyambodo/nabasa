<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top text-uppercase">
            <i class="fa fa-user"></i> Total Nasabah</span>
        <div class="count">
            <?= $Totnasabah ?>
        </div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top text-uppercase">
            <i class="fa fa-money"></i> Plafond <?= date("F") ?></span>
        <div class="count" style="font-size:25px;">
            <?php
            foreach ($plaf as $plaf) {
                echo $plaf->plafond;
            }
            ?>
        </div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top text-uppercase">
            <i class="fa fa-user"></i> HOT PROSPEK <?= date("M") ?></span>
        <div class="count green" style="font-size:25px;">
            <?php
            foreach ($hotP as $hotP) {
                echo $hotP->HotProspek;
            }
            ?>
        </div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count hide">
        <span class="count_top text-uppercase">
            <i class="fa fa-user"></i> Total Females</span>
        <div class="count">4,567</div>
        <span class="count_bottom">
            <i class="red">
                <i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count hide">
        <span class="count_top text-uppercase">
            <i class="fa fa-user"></i> Total Collections</span>
        <div class="count">2,315</div>
        <span class="count_bottom">
            <i class="green">
                <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count hide">
        <span class="count_top text-uppercase">
            <i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom">
            <i class="green">
                <i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
</div>
<div class="x_panel hide">
    <div class="x_content">
        <canvas id="mybarChart"></canvas>
    </div>
</div>
<iframe src="https://calendar.google.com/calendar/embed?title=KSP%20NABASA%20CALENDAR&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=nabasaksp%40gmail.com&amp;color=%231B887A&amp;src=en.christian%23holiday%40group.v.calendar.google.com&amp;color=%231B887A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2328754E&amp;src=id.indonesian%23holiday%40group.v.calendar.google.com&amp;color=%23711616&amp;src=en.judaism%23holiday%40group.v.calendar.google.com&amp;color=%231B887A&amp;src=en.islamic%23holiday%40group.v.calendar.google.com&amp;color=%231B887A&amp;src=en.orthodox_christianity%23holiday%40group.v.calendar.google.com&amp;color=%231B887A&amp;ctz=Asia%2FJakarta" style="border:solid 1px #777" width="100%" height="600" frameborder="0" scrolling="no"></iframe>