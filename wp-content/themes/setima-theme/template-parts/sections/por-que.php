<section id="por-que" class="section_por_que background-color-black section-home" data-color="white">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="max-width-large">
                    <h2 words-slide-up="" text-split="" class="heading-style-h2">
                        <?php the_field("titulo_por_que"); ?>
                    </h2>
                </div>
                <div class="spacer-xxlarge"></div>

                <?php if (have_rows("textos_por_que")): ?>
                <div class="perguntas_component max-width-large align-center">

                    <?php while (have_rows("textos_por_que")):
                    	the_row(); ?>

                    <div data-w-id="43b1d2d7-88bd-fc63-6082-63b71eb98b81" class="pergunta_item">
                        <div data-w-id="43b1d2d7-88bd-fc63-6082-63b71eb98b82" class="accordion2_top">
                            <div class="perguntas_pergunta">
                                <?php the_sub_field("titulo_texto_porque"); ?>
                            </div>
                            <div class="accordion2_icon w-embed">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="57.688" height="57.688"
                                     viewBox="0 0 57.688 57.688">
                                    <defs>
                                        <linearGradient id="linear-gradient" x1="0.146" y1="0.854" x2="0.854"
                                                        y2="0.146" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#1d37bf"></stop>
                                            <stop offset="1" stop-color="#672c99"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="Group_34" data-name="Group 34"
                                       transform="translate(-1361.695 -3425.565)">
                                        <circle id="Ellipse_3" data-name="Ellipse 3" cx="28.844" cy="28.844"
                                                r="28.844" transform="translate(1361.695 3425.565)"
                                                fill="url(#linear-gradient)"></circle>
                                        <g id="Group_33" data-name="Group 33">
                                            <path id="Path_32" data-name="Path 32"
                                                  d="M1403.123,3458.24h-8.754v8.754h-7.66v-8.754h-8.755v-7.662h8.755v-8.753h7.66v8.753h8.754Z"
                                                  fill="#fff"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div style="height:0px" class="accordion2_bottom">
                            <p class="perguntas_content">
                                <?php the_sub_field("titulo_texto_porque_copy"); ?>
                            </p>
                            <div class="spacer-medium"></div>
                        </div>
                    </div>

                    <?php
                    endwhile; ?>

                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>