<section class="section_hero section-home" data-color="white">
    <div class="padding-global">
        <div class="container-large">
            <div class="hero_content">
                <img
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/path-setima-hero.svg?v=1703175368"
                     loading="lazy"
                     alt="Logo Sétima" class="path-setima">
                <p data-w-id="c58a3e4a-5c77-dcc1-90a7-896ae22b945c"
                   style="-webkit-transform:translate3d(null, 150px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 150px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 150px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 150px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0.3"
                   class="text-size-large">

                    <?php while (have_rows("hero_textos")):
                    	the_row(); ?>
                    <?php the_sub_field("hero_textos_item"); ?><br>
                    <?php
                    endwhile; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="header7_background-video-wrapper">
        <div data-poster-url="<?php echo get_template_directory_uri(); ?>/assets/videos/eae05137-8763-48c0-838e-09ea0af20c6a-poster-00001.jpg?v=1703175368"
             data-video-urls="<?php echo get_template_directory_uri(); ?>/assets/videos/eae05137-8763-48c0-838e-09ea0af20c6a-transcode.mp4?v=1703175368 undefined, <?php echo get_template_directory_uri(); ?>/assets/videos/eae05137-8763-48c0-838e-09ea0af20c6a-transcode.webm?v=1703175368 undefined"
             data-autoplay="true" data-loop="true" data-wf-ignore="true" data-beta-bgvideo-upgrade="false"
             class="header7_background-video w-background-video w-background-video-atom"><video
                   id="c58a3e4a-5c77-dcc1-90a7-896ae22b9466-video" autoplay="" loop=""
                   style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/videos/eae05137-8763-48c0-838e-09ea0af20c6a-poster-00001.jpg?v=1703175368'); "
                   muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/eae05137-8763-48c0-838e-09ea0af20c6a-transcode.mp4?v=1703175368"
                        data-wf-ignore="true">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/eae05137-8763-48c0-838e-09ea0af20c6a-transcode.webm?v=1703175368"
                        data-wf-ignore="true">
            </video></div>
        <div class="video-overlay-layer"></div>
    </div>
</section>