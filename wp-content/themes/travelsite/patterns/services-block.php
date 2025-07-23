<?php

/**
 * Title: Services Block
 * Slug: travelsite/services-block
 * Categories: travelsite-patterns
 */
$travelsite_services_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_services_img = array(
    $travelsite_services_url . 'assets/images/icon-1.png',
    $travelsite_services_url . 'assets/images/icon-2.png',
    $travelsite_services_url . 'assets/images/icon-3.png'
)
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"656px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Our Popular Services!', 'travelsite') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","fontFamily":"plus-vietnam-pro"} -->
            <p class="has-text-align-center has-plus-vietnam-pro-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"35px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","wideSize":"370px"}} -->
                <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","bottom":"40px","left":"25px","right":"25px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"accent-lite","layout":{"type":"constrained","wideSize":"100%"}} -->
                    <div class="wp-block-group has-border-color has-accent-lite-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:25px;padding-bottom:40px;padding-left:25px"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","wideSize":"318px"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":33,"width":"99px","height":"82px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($travelsite_services_img[0]) ?>" alt="" class="wp-image-33" style="object-fit:cover;width:99px;height:82px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"inter"} -->
                            <h4 class="wp-block-heading has-text-align-center has-inter-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('Flight Booking', 'travelsite') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","fontFamily":"plus-vietnam-pro"} -->
                            <p class="has-text-align-center has-plus-vietnam-pro-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","wideSize":"370px"}} -->
                <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","bottom":"40px","left":"25px","right":"25px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"accent-lite","layout":{"type":"constrained","wideSize":"100%"}} -->
                    <div class="wp-block-group has-border-color has-accent-lite-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:25px;padding-bottom:40px;padding-left:25px"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","wideSize":"318px"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":146,"width":"99px","height":"82px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($travelsite_services_img[1]) ?>" alt="" class="wp-image-146" style="object-fit:cover;width:99px;height:82px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"inter"} -->
                            <h4 class="wp-block-heading has-text-align-center has-inter-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('Family Tour', 'travelsite') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","fontFamily":"plus-vietnam-pro"} -->
                            <p class="has-text-align-center has-plus-vietnam-pro-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","wideSize":"370px"}} -->
                <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","bottom":"40px","left":"25px","right":"25px"}},"border":{"radius":"20px","width":"1px"}},"borderColor":"accent-lite","layout":{"type":"constrained","wideSize":"100%"}} -->
                    <div class="wp-block-group has-border-color has-accent-lite-border-color" style="border-width:1px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:25px;padding-bottom:40px;padding-left:25px"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","wideSize":"318px"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":147,"width":"99px","height":"82px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                            <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($travelsite_services_img[2]) ?>" alt="" class="wp-image-147" style="object-fit:cover;width:99px;height:82px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"inter"} -->
                            <h4 class="wp-block-heading has-text-align-center has-inter-font-family" style="font-style:normal;font-weight:600"><?php esc_html_e('Hotel Booking', 'travelsite') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","fontFamily":"plus-vietnam-pro"} -->
                            <p class="has-text-align-center has-plus-vietnam-pro-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
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
    <!-- /wp:group -->
</div>
<!-- /wp:group -->