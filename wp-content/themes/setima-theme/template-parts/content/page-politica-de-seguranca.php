<div class="page-wrapper">
    <?php get_template_part("template-parts/common/global-styles"); ?>
    <div data-animation="default" class="navbar-interna w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav"
         data-easing="ease" data-collapse="medium" data-w-id="aee99368-6f62-4ad3-d13a-2f8d906aee74" role="banner"
         data-duration="400">
        <div class="navbar_container">
            <a href="#" class="navbar1_logo-link w-nav-brand"><img
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-setima_preto.png?v=1703175368"
                     loading="lazy" alt="" class="navbar1_logo"></a>
            <nav role="navigation" class="navbar1_menu is-page-height-tablet w-nav-menu">
                <a href="<?php echo esc_url(home_url("#sobre")); ?>"
                   class="navbar1_link black w-nav-link"><?php _e("SOBRE", "stima-theme"); ?></a>
                <a href="<?php echo esc_url(home_url("#por-que")); ?>"
                   class="navbar1_link black w-nav-link"><?php _e("POR QUÊ?", "stima-theme"); ?></a>
                <a href=<?php echo esc_url(home_url("#como-pensamos")); ?>
                   class="navbar1_link black w-nav-link"><?php _e("COMO PENSAMOS", "stima-theme"); ?></a>
                <a href="<?php echo esc_url(home_url("#entregaveis")); ?>"
                   class="navbar1_link black w-nav-link"><?php _e("ENTREGÁVEIS", "stima-theme"); ?></a>
                <a href="<?php echo esc_url(home_url("#holding")); ?>"
                   class="navbar1_link black w-nav-link"><?php _e("HOLDING", "stima-theme"); ?></a>
                <a href="<?php echo esc_url(home_url("#contato")); ?>"
                   class="navbar1_link black w-nav-link"><?php _e("CONTATO", "stima-theme"); ?></a>
            </nav>
            <div class="navbar1_menu-button w-nav-button">
                <div class="menu-icon1">
                    <div class="menu-icon1_line-top"></div>
                    <div class="menu-icon1_line-middle">
                        <div class="menu-icon_line-middle-inner"></div>
                    </div>
                    <div class="menu-icon1_line-bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <main class="main-wrapper">
        <header class="section_legal1-header">
            <div class="padding-global">
                <div class="container-small">
                    <div class="padding-section-large">
                        <div class="text-align-center">
                            <h1 class="heading-style-h1"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section_legal1-content">
            <div class="padding-global">
                <div class="container-small">
                    <div class="legal1-content_component">
                        <div class="text-rich-text w-richtext">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_template_part("template-parts/common/footer"); ?>

</div>