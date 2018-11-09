<div class="back-to-top" data-placement="top" data-toggle="tooltip" id="back-top" title="" data-original-title="Back to Top"><i class="icon-angle-up"></i>
</div>
<footer id=footer class=dark>
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; <?= date("Y"); ?> All Rights Reserved by <a href="<?= base_url(); ?>">PT Marsit Bangun Sejahtera</a>
            </div>

            <div class="col_half col_last tright">
                <div class="clear"></div>

                <i class="icon-envelope2"></i> info@marsitbangunsejahtera.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +62-877-8613-0256 // (021)82738377
            </div>
        </div>
    </div>
</footer>
<script src=<?= base_url('assets/js/jquery.js'); ?>></script>
<script src=<?= base_url('assets/js/plugins.js'); ?>></script>
<script src=<?= base_url('assets/js/functions.js'); ?>></script>
<script type='text/javascript'>
    $(window).scroll(function () { $(this).scrollTop() > 100 ? $(".scrollToTop").fadeIn() : $(".scrollToTop").fadeOut(); }), $(".back-to-top").click(function () { return $("html, body").animate({ scrollTop: 0 }, 800), !1; });
</script>