<?php

/**
 * Title: Footer
 * Slug: travelsite/footer-default
 * Categories: footer, travelsite-patterns
 */
$travelsite_footer_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_footer_img = array(
    $travelsite_footer_url . 'assets/images/mail.png',
    $travelsite_footer_url . 'assets/images/call.png',
    $travelsite_footer_url . 'assets/images/location.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"200px"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"textColor":"foregound-alt","fontSize":"large","fontFamily":"inter"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-inter-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700;text-transform:uppercase">
                <?php esc_html_e('Travelsite', 'travelsite') ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"35px","right":"0","bottom":"var:preset|spacing|30","left":"0"}}},"textColor":"foregound-alt"} -->
            <p class="has-foregound-alt-color has-text-color" style="margin-top:35px;margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0">
                <?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam,', 'travelsite') ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"customIconBackgroundColor":"#2f1b01","iconBackgroundColorValue":"#2f1b01","openInNewTab":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <ul class="wp-block-social-links has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"twitter"} /-->

                <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600">
                <?php esc_html_e('Quick Menu', 'travelsite') ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-secondary is-style-default","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"30px","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2},"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}}} -->
                <ul style="margin-top:30px;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="wp-block-list is-style-hide-bullet-list-link-hover-style-secondary is-style-default has-link-color"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About us', 'travelsite') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'travelsite') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Our Team', 'travelsite') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'travelsite') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Conatct Us', 'travelsite') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"foregound-alt","fontSize":"large"} -->
            <h3 class="wp-block-heading has-foregound-alt-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600">
                <?php esc_html_e('Supports', 'travelsite') ?>
            </h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($travelsite_footer_img[0]) ?>" alt="" class="wp-image-8" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"fontSize":"small","fontFamily":"public-sans"} -->
                <p class="has-public-sans-font-family has-small-font-size">
                    <?php esc_html_e('info@example.com', 'travelsite') ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":10,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($travelsite_footer_img[1]) ?>" alt="" class="wp-image-10" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"fontSize":"small","fontFamily":"public-sans"} -->
                <p class="has-public-sans-font-family has-small-font-size">
                    <?php esc_html_e('+01(987-654-321)', 'travelsite') ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($travelsite_footer_img[2]) ?>" alt="" class="wp-image-11" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"fontFamily":"public-sans"} -->
                <p class="has-public-sans-font-family"><?php esc_html_e('przykładowy obszar działania', 'travelsite') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"0","bottom":"var:preset|spacing|50","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}}},"textColor":"foregound-alt"} -->
        <p class="has-text-align-center has-foregound-alt-color has-text-color has-link-color">
            <?php esc_html_e('Proudly powered by WordPress | Theme: FotaWP by', 'travelsite') ?>
            <a href="https://cozythemes.com/" target="_blank" rel="noopener"><?php esc_html_e('CozyThemes.', 'travelsite') ?></a>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->