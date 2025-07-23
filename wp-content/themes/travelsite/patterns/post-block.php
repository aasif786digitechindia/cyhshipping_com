<?php

/**
 * Title: Latest Post Block
 * Slug: travelsite/post-block
 * Categories: travelsite-patterns
 */
?>
<!-- wp:group {"style":{"color":{"background":"#f8f8f8"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f8f8f8;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:90px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","wideSize":"1180px"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","wideSize":"656px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('News & Article', 'travelsite') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'travelsite') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:query {"queryId":16,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"className":"is-style-fotawp-boxshadow-medium","style":{"spacing":{"blockGap":"0"},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-fotawp-boxshadow-medium" style="border-radius:20px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px"}}}} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"blockGap":"10px","margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"background","layout":{"inherit":false}} -->
                    <div class="wp-block-group has-background-background-color has-background" style="border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

                            <!-- wp:post-date {"format":"M j, Y","fontSize":"x-small"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"black","fontFamily":"inter"} /-->

                        <!-- wp:post-excerpt {"excerptLength":20} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->