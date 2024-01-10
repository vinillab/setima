<section id="sobre" class="section_sobre section-home" data-color="black">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-sobre">
                <h2 words-rotate-in="" text-split="" class="heading-style-h2">
                    <?php while (have_rows("sobre_titulo")):
                    	the_row(); ?>
                    <?php the_sub_field("sobte_titulo_1"); ?>
                    <strong>×</strong>
                    <?php the_sub_field("sobte_titulo_2"); ?>
                    <strong>×</strong>
                    <?php the_sub_field("sobte_titulo_3"); ?>
                    <?php
                    endwhile; ?>
                </h2>
                <div class="max-width-large">
                    <div class="spacer-small"></div>
                    <div letters-fade-in="" text-split="" class="texto-intro">
                        <?php the_field("sobre_texto_1"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>