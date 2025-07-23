<?php

/**
 * Title: Travel Block
 * Slug: travelsite/travel-block
 * Categories: travelsite-patterns
 */
$travelsite_travel_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_travel_img = array(
    $travelsite_travel_url . 'assets/images/beach.jpg',
    $travelsite_travel_url . 'assets/images/hills.jpg',
    $travelsite_travel_url . 'assets/images/village.jpg',
    $travelsite_travel_url . 'assets/images/landscape.jpg'
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained","wideSize":"657px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"inter"} -->
            <h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="font-style:normal;font-weight:700"><?php esc_html_e('Where Do You Want To Travel?', 'travelsite') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"25px","left":"25px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($travelsite_travel_img[1]) ?>","id":247,"dimRatio":0,"isUserOverlayColor":true,"minHeight":350,"className":"fotawp-cover-hover","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"276px"}} -->
                    <div class="wp-block-cover fotawp-cover-hover" style="border-radius:20px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-247" alt="" src="<?php echo esc_url($travelsite_travel_img[1]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large","fontFamily":"inter"} -->
                            <p class="has-text-align-center has-inter-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80);font-style:normal;font-weight:700"><?php esc_html_e('Castle Tour', 'travelsite') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($travelsite_travel_img[2]) ?>","id":246,"dimRatio":0,"isUserOverlayColor":true,"minHeight":350,"isDark":false,"className":"fotawp-cover-hover","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"276px"}} -->
                    <div class="wp-block-cover is-light fotawp-cover-hover" style="border-radius:20px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-246" alt="" src="<?php echo esc_url($travelsite_travel_img[2]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"textColor":"background","fontSize":"large","fontFamily":"inter"} -->
                            <p class="has-text-align-center has-background-color has-text-color has-link-color has-inter-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80);font-style:normal;font-weight:700"><?php esc_html_e('Village Tour', 'travelsite') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($travelsite_travel_img[3]) ?>","id":248,"dimRatio":0,"isUserOverlayColor":true,"minHeight":350,"isDark":false,"className":"fotawp-cover-hover","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"276px"}} -->
                    <div class="wp-block-cover is-light fotawp-cover-hover" style="border-radius:20px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-248" alt="" src="<?php echo esc_url($travelsite_travel_img[3]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large","fontFamily":"inter"} -->
                            <p class="has-text-align-center has-background-color has-text-color has-link-color has-inter-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80);font-style:normal;font-weight:700"><?php esc_html_e('Trekking', 'travelsite') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($travelsite_travel_img[0]) ?>","id":245,"dimRatio":0,"isUserOverlayColor":true,"minHeight":350,"isDark":false,"className":"fotawp-cover-hover","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"276px"}} -->
                    <div class="wp-block-cover is-light fotawp-cover-hover" style="border-radius:20px;min-height:350px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-245" alt="" src="<?php echo esc_url($travelsite_travel_img[0]) ?>" data-object-fit="cover" />
                        <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large","fontFamily":"inter"} -->
                            <p class="has-text-align-center has-background-color has-text-color has-link-color has-inter-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80);font-style:normal;font-weight:700"><?php esc_html_e('Beaches', 'travelsite') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->