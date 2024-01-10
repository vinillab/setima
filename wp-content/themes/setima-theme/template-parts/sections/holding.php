<section id="holding" class="section_holding section-home" data-color="white">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="max-width-full text-align-center">
                    <h2 words-slide-up="" text-split="" class="heading-style-h2">
                        <?php the_field("titulo_holding"); ?>
                    </h2>
                    <div class="spacer-large"></div>

                    <?php if (have_rows("logos_holding")): ?>

                    <div class="logos_component">
                        <?php while (have_rows("logos_holding")):
                        	the_row(); ?>
                        <?php $logo_cliente = get_sub_field("logo_cliente"); ?>
                        <?php if ($logo_cliente): ?>
                        <a href="<?php the_sub_field("link_logo_cliente"); ?>" target="_blank" class="w-inline-block">
                            <img
                                 src="<?php echo esc_url($logo_cliente["url"]); ?>"
                                 loading="lazy" alt="<?php echo esc_attr($logo_cliente["alt"]); ?>"
                                 class="holding_logos">
                        </a>
                        <?php endif; ?>
                        <?php
                        endwhile; ?>
                    </div>

                    <?php endif; ?>

                </div>

                <div class="max-width-large align-center">
                    <section class="tab_component">
                        <div class="padding-section-large">
                            <div data-current="Tab 1" data-easing="ease" data-duration-in="300"
                                 data-duration-out="100" class="holding_component w-tabs">
                                <div class="holding_tabs-menu no-scrollbar w-tab-menu">
                                    <a data-w-tab="Tab 1"
                                       class="holding_tab-link w-inline-block w-tab-link w--current">
                                        <div><?php _e("555 Studios", "stima-theme"); ?></div>
                                    </a>
                                    <a data-w-tab="Tab 2" class="holding_tab-link w-inline-block w-tab-link">
                                        <div><?php _e("F.Set", "stima-theme"); ?></div>
                                    </a>
                                </div>
                                <div class="holding_tabs-content w-tab-content">
                                    <div data-w-tab="Tab 1" class="holdings_tab-pane w-tab-pane w--tab-active">
                                        <div class="rich-text-holding w-richtext" words-slide-up="" text-split="">
                                            <?php the_field("555_studios"); ?>
                                        </div>
                                    </div>
                                    <div data-w-tab="Tab 2" class="holdings_tab-pane w-tab-pane">
                                        <div class="rich-text-holding w-richtext" words-slide-up="" text-split="">
                                            <?php the_field("fset"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>