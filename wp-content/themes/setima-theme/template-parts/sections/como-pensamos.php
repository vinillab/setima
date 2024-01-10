<section id="como-pensamos" class="section_como-pensamos section-home" data-color="white">
    <div class="padding-global">
        <div class="container-large">
            <div class="paddibg-section_como-pensamos">
                <h2 words-slide-up="" text-split="" class="heading-style-h2">
                    <?php the_field("titulo_como_a_gente_pensa"); ?>
                </h2>
                <div class="spacer-slider"></div>

                <?php if (have_rows("textos_como_a_gente_pensa")): ?>
                <div class="container-slider">
                    <div data-delay="8000" data-animation="cross" class="slider w-slider" data-autoplay="true"
                         data-easing="ease" data-hide-arrows="false" data-disable-swipe="false"
                         data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                        <div class="slider-mask w-slider-mask">

                            <?php while (have_rows("textos_como_a_gente_pensa")):
                            	the_row(); ?>
                            <div class="slider-item w-slide">
                                <div class="slider_content">
                                    <div class="padding-slider">
                                        <div class="text-align-center">
                                            <p scrub-each-word="" text-split="" class="slider-text">
                                                <?php the_sub_field("texto_como_a_gente_pensa"); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile; ?>

                        </div>
                        <div class="w-slider-arrow-left">
                            <div class="w-icon-slider-left"></div>
                        </div>
                        <div class="w-slider-arrow-right">
                            <div class="w-icon-slider-right"></div>
                        </div>
                        <div class="slider-nav w-slider-nav w-round"></div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="header30_background-image-wrapper">
        <div class="image-overlay-layer"></div>
        <img
             src="<?php echo get_template_directory_uri(); ?>/assets/images/group-41.png?v=1703175368"
             loading="eager" sizes="100vw"
             srcset="<?php echo get_template_directory_uri(); ?>/assets/images/group-41-p-500.png?v=1703175368 500w, <?php echo get_template_directory_uri(); ?>/assets/images/group-41-p-800.png?v=1703175368 800w, <?php echo get_template_directory_uri(); ?>/assets/images/group-41-p-1080.png?v=1703175368 1080w, <?php echo get_template_directory_uri(); ?>/assets/images/group-41-p-1600.png?v=1703175368 1600w, <?php echo get_template_directory_uri(); ?>/assets/images/group-41.png?v=1703175368 1920w"
             alt="" class="header30_background-image">
    </div>
</section>