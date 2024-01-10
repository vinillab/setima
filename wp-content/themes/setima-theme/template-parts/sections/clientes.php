<section id="clientes" class="section_clientes section-home" data-color="black">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="max-width-large">
                    <h2 words-slide-up="" text-split="" class="heading-style-h2">
                        <?php the_field("titulo_clientes"); ?>
                    </h2>
                </div>
                <div class="spacer-xlarge"></div>

                <?php if (have_rows("logos_clientes")): ?>
                <div class="clientes_component">
                    <?php while (have_rows("logos_clientes")):
                    	the_row(); ?>
                    <?php $logo_cliente = get_sub_field("logo_cliente"); ?>
                    <?php if ($logo_cliente): ?>
                    <img
                         src="<?php echo esc_url($logo_cliente["url"]); ?>"
                         loading="lazy" data-w-id="2bba122c-2193-9ec4-d33c-847e0da40383"
                         alt="<?php echo esc_attr($logo_cliente["alt"]); ?>"
                         class="cliente_logo">
                    <?php endif; ?>
                    <?php
                    endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
</section>