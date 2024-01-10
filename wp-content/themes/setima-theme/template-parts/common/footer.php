<footer id="contato" class="footer">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-footer">
                <div class="w-layout-grid footer4_top-wrapper">
                    <a href="#" id="w-node-a0b3100a-f72f-3d6c-5198-d0b0ce33dce4-ce33dcdf"
                       class="footer4_logo-link w-nav-brand">
                        <img
                             src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-setima_preto.png?v=1703175368"
                             loading="lazy" alt="" class="logo-footer"></a>

                    <div class="footer3_details-wrapper">
                        <div class="text-size-medium"><?php _e("CHAMA A GENTE", "stima-theme"); ?></div>
                        <div class="spacer-medium"></div>

                        <div class="text-size-small"><?php _e("ENDEREÇO", "stima-theme"); ?></div>
                        <div class="text-size-regular">
                            <?php the_field("endereco"); ?></div>
                        <div class="spacer-small"></div>

                        <div class="text-size-small"><?php _e("WHATSAPP", "stima-theme"); ?></div>
                        <div class="text-size-regular">
                            <a href="<?php the_field("link_whatsapp"); ?>"
                               target="_blank"><?php the_field("whatsapp"); ?></a>
                        </div>
                        <div class="spacer-small"></div>

                        <div class="text-size-small-semibold">
                            <?php _e("EMAIL", "stima-theme"); ?>
                        </div>
                        <div class="text-size-regular">
                            <a href="mailto:<?php the_field("email"); ?>"
                               target="_blank"><?php the_field("email"); ?></a>
                        </div>
                    </div>
                    <div id="w-node-a0b3100a-f72f-3d6c-5198-d0b0ce33dcfb-ce33dcdf"
                         class="w-layout-grid footer4_social-list">
                        <div class="text-size-medium"><?php _e("SIGA", "stima-theme"); ?></div>
                        <div class="spacer-medium"></div>

                        <?php if (have_rows("redes_sociais")): ?>
                        <div class="footer_icons-wrapper">
                            <?php while (have_rows("redes_sociais")):
                            	the_row(); ?>

                            <a href="<?php the_sub_field("rede_social"); ?>"
                               class="footer4_social-link w-inline-block" target="_blank">
                                <div class="icon-embed-xsmall w-embed">
                                    <?php the_sub_field("icone"); ?>
                                </div>
                            </a>
                            <?php
                            endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php $link_politica_de_seguranca = get_field("link_politica_de_seguranca"); ?>
            <?php if ($link_politica_de_seguranca): ?>
            <div class="padding-top padding-large">
                <div class="w-layout-grid footer4_bottom-wrapper">
                    <a href="<?php echo esc_url($link_politica_de_seguranca["url"]); ?>"
                       target="<?php echo esc_attr($link_politica_de_seguranca["target"]); ?>"
                       class="footer4_legal-link"><?php echo esc_html($link_politica_de_seguranca["title"]); ?></a>
                </div>
            </div>
            <?php endif; ?>


        </div>
    </div>
    </div>
</footer>