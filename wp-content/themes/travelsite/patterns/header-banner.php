<?php

/**
 * Title: Header Banner
 * Slug: travelsite/header-banner
 * Categories: travelsite-patterns
 */
$travelsite_banner_url = trailingslashit(get_stylesheet_directory_uri());
$travelsite_banner_img = array(
    $travelsite_banner_url . 'assets/images/banner.jpg'
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($travelsite_banner_img[0]) ?>","id":15,"isUserOverlayColor":true,"minHeight":860,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","contentPosition":"top center","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-cover alignfull has-custom-content-position is-position-top-center" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:860px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><img class="wp-block-cover__image-background wp-image-15" alt="" src="<?php echo esc_url($travelsite_banner_img[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo /-->

                        <!-- wp:site-title {"level":5,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <!-- wp:navigation -->
                        <!-- wp:page-list /-->
                        <!-- /wp:navigation -->

                        <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"backgroundColor":"transparent"} /-->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"100px"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:100px"><?php esc_html_e('Contact us', 'travelsite') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"240px","bottom":"0"},"blockGap":"20px"}},"layout":{"type":"constrained","contentSize":"1030px","wideSize":"1180px"},"cozyAnimation":{"type":"slide-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
            <div class="wp-block-group" style="margin-top:240px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained","contentSize":"684px"},"cozyAnimation":{"type":"slide-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":600}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","cozyCustomFont":"Be Vietnam Pro","cozyAnimation":{"type":"none","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":600}} -->
                    <p class="has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">
                        <?php esc_html_e('Visit the beautiful landscapes!', 'travelsite') ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"center","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"fontSize":"58px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.3","textTransform":"uppercase"},"color":{"text":"#fffffe"}},"fontFamily":"inter","cozyCustomFont":"Raleway","cozyAnimation":{"type":"slide-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1000}} -->
                <h2 class="wp-block-heading has-text-align-center is-style-default has-text-color has-link-color has-inter-font-family" style="color:#fffffe;font-size:58px;font-style:normal;font-weight:800;line-height:1.3;text-transform:uppercase">
                    <?php esc_html_e('Embark on a journey like no other explore with us!', 'travelsite') ?>
                </h2>
                <!-- /wp:heading -->

                <!-- wp:buttons {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","justifyContent":"center"},"cozyAnimation":{"type":"slide-up","easingFunction":"ease-in-out","anchorPlacement":"top-bottom","duration":1200}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'travelsite') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Learn More', 'travelsite') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->