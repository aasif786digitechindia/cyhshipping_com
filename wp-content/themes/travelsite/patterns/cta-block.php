<?php

/**
 * Title: CTA Block
 * Slug: travelsite/cta-block
 * Categories: travelsite-patterns
 */
$travelsite_cta_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_cta_img = array(
    $travelsite_cta_url . 'assets/images/image.png'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#fbf8f8"}},"layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fbf8f8;margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":null} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"inter"} -->
                    <h2 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:700"><?php esc_html_e('Create Memories That Last a Lifetime Travel with Us!', 'travelsite') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontFamily":"plus-vietnam-pro"} -->
                    <p class="has-plus-vietnam-pro-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'travelsite') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-custom-primary","style":{"typography":{"textTransform":"uppercase"},"border":{"radius":"0px"}}} -->
                        <div class="wp-block-button" style="text-transform:uppercase"><a class="wp-block-button__link has-custom-custom-primary-background-color has-background wp-element-button" style="border-radius:0px"><?php esc_html_e('Learn More', 'travelsite') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":75,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url($travelsite_cta_img[0]) ?>" alt="" class="wp-image-75" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->