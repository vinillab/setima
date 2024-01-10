<div class="page-wrapper">
    <?php get_template_part("template-parts/common/loader"); ?>
    <?php get_template_part("template-parts/common/global-styles"); ?>
    <?php get_template_part("template-parts/common/navbar"); ?>
    <main class="main-wrapper" id="luxy">
        <?php get_template_part("template-parts/sections/hero"); ?>
        <?php get_template_part("template-parts/sections/sobre"); ?>
        <?php get_template_part("template-parts/sections/sobre-intro"); ?>
        <?php get_template_part("template-parts/sections/video"); ?>
        <?php get_template_part("template-parts/sections/por-que"); ?>
        <?php get_template_part("template-parts/sections/clientes"); ?>
        <?php get_template_part("template-parts/sections/como-pensamos"); ?>
        <?php get_template_part("template-parts/sections/entregaveis"); ?>
        <?php get_template_part("template-parts/sections/holding"); ?>
        <?php get_template_part("template-parts/common/footer"); ?>
    </main>

</div>

<script type="text/javascript">
var $ = window.jQuery;
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/setima.js?v=1703175368" type="text/javascript">
</script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="https://player.vimeo.com/api/player.js"></script>
<script>
var player = new Vimeo.Player($("#vimeo-video")[0]);
$("[vimeo=unmute]").click(function() {
    player.setCurrentTime(0);
    player.setMuted(false);
});
$("[vimeo=play]").click(function() {
    player.play();
});
$("[vimeo=pause]").click(function() {
    player.pause();
});
</script>
<!--  START: Mobile Autoplay Video  -->
<script>
var mobilevideo = document.getElementsByTagName("video")[0];
mobilevideo.setAttribute("playsinline", "");
mobilevideo.setAttribute("muted", "");
</script>
<!--  END: Mobile Autoplay Video  -->