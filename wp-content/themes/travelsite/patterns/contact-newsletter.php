<?php

/**
 * Title: Contact Newsletter
 * Slug: travelsite/contact-newsletter
 * Categories: travelsite-patterns
 */
$travelsite_contact_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_contact_img = array(
    $travelsite_contact_url . 'assets/images/contact-banner.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($travelsite_contact_img[0]) ?>","id":166,"source":"file","title":"banner"},"backgroundPosition":"50% 0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"constrained","wideSize":"690px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"16px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"xx-large","fontFamily":"inter"} -->
            <h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-inter-font-family has-xx-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Subscribe Our Newsletter!', 'travelsite') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
            <p class="has-text-align-center has-background-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"},"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:40px;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
            <p class="has-text-align-center has-background-color has-text-color has-link-color"><?php esc_html_e('* Note : Insert Contact Form 7 shortcode with the custom classname "fotawp-footer-newsletter"', 'travelsite') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"30px","bottom":"0","left":"0","right":"0"}}},"textColor":"background"} -->
            <p class="has-text-align-center has-background-color has-text-color has-link-color" style="margin-top:30px;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Get The Latest Updates', 'travelsite') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->