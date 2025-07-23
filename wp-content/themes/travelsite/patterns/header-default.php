<?php

/**
 * Title: Header Default
 * Slug: travelsite/header-default
 * Categories: header,travelsite-patterns
 */
?>

<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"20px","bottom":"20px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained","wideSize":"100%"}} -->
<header class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"125px","margin":{"bottom":"0"}}},"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:site-title {"className":"is-style-title-hover-border","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large-medium"} /-->

            <!-- wp:navigation {"textColor":"primary"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px"}},"fontSize":"normal"} -->
                <div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:4px"><?php esc_html_e('Contact US', 'travelsite') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</header>
<!-- /wp:group -->