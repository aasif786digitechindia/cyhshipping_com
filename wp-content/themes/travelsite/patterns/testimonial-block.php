<?php

/**
 * Title: Testimonial Block
 * Slug: travelsite/testimonial-block
 * Categories: travelsite-patterns
 */
$travelsite_testimonial_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_testimonial_img = array(
    $travelsite_testimonial_url . 'assets/images/testimonial.png',
    $travelsite_testimonial_url . 'assets/images/testimonial-comma.png'
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#f8f8f8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"inter"} -->
                    <h2 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:700"><?php esc_html_e('Beautiful Words From Our Clients', 'travelsite') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"cozyCustomFont":"Be Vietnam Pro"} -->
                    <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"is-style-fotawp-boxshadow-medium","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"575px"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-medium" style="border-radius:20px"><!-- wp:columns {"className":"is-style-fotawp-boxshadow","style":{"shadow":"none","border":{"radius":"20px"},"spacing":{"blockGap":{"top":"16px","left":"16px"},"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"}}}} -->
                    <div class="wp-block-columns is-style-fotawp-boxshadow" style="border-radius:20px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px;box-shadow:none"><!-- wp:column {"width":"20%"} -->
                        <div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":477,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($travelsite_testimonial_img[0]) ?>" alt="" class="wp-image-477" style="object-fit:cover;width:90px;height:90px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"80%"} -->
                        <div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":213,"width":"23px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($travelsite_testimonial_img[1]) ?>" alt="" class="wp-image-213" style="object-fit:cover;width:23px;height:20px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'travelsite') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"inter"} -->
                                    <h5 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('Margaret', 'travelsite') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Customer', 'travelsite') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-fotawp-boxshadow-medium","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"575px"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-medium" style="border-radius:20px"><!-- wp:columns {"className":"is-style-fotawp-boxshadow","style":{"shadow":"none","border":{"radius":"20px"},"spacing":{"blockGap":{"top":"16px","left":"16px"},"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"}}}} -->
                    <div class="wp-block-columns is-style-fotawp-boxshadow" style="border-radius:20px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px;box-shadow:none"><!-- wp:column {"width":"20%"} -->
                        <div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":477,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($travelsite_testimonial_img[0]) ?>" alt="" class="wp-image-477" style="object-fit:cover;width:90px;height:90px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"80%"} -->
                        <div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":213,"width":"23px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($travelsite_testimonial_img[1]) ?>" alt="" class="wp-image-213" style="object-fit:cover;width:23px;height:20px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'travelsite') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"inter"} -->
                                    <h5 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('Margaret', 'travelsite') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Customer', 'travelsite') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"is-style-fotawp-boxshadow-medium","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained","wideSize":"575px"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-medium" style="border-radius:20px"><!-- wp:columns {"className":"is-style-fotawp-boxshadow","style":{"shadow":"none","border":{"radius":"20px"},"spacing":{"blockGap":{"top":"16px","left":"16px"},"padding":{"top":"35px","bottom":"35px","left":"30px","right":"30px"}}}} -->
                    <div class="wp-block-columns is-style-fotawp-boxshadow" style="border-radius:20px;padding-top:35px;padding-right:30px;padding-bottom:35px;padding-left:30px;box-shadow:none"><!-- wp:column {"width":"20%"} -->
                        <div class="wp-block-column" style="flex-basis:20%"><!-- wp:image {"id":477,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($travelsite_testimonial_img[0]) ?>" alt="" class="wp-image-477" style="object-fit:cover;width:90px;height:90px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"80%"} -->
                        <div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:image {"id":213,"width":"23px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($travelsite_testimonial_img[1]) ?>" alt="" class="wp-image-213" style="object-fit:cover;width:23px;height:20px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:paragraph -->
                                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'travelsite') ?></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"inter"} -->
                                    <h5 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('Margaret', 'travelsite') ?></h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p><?php esc_html_e('Customer', 'travelsite') ?></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->