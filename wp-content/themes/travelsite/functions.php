<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function travelsite_scripts()
{
    // enqueue parent style
    wp_enqueue_style('travelsite-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'travelsite_scripts');

if (!function_exists('travelsite_excerpt_limit')) {
    function travelsite_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 40;
    }
    add_filter('excerpt_length', 'travelsite_excerpt_limit');
}

/**
 * Registers pattern categories.
 *
 * @since travelsite 1.0.0
 *
 * @return void
 */
function travelsite_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'travelsite-patterns' => array('label' => __('Travelsite Patterns', 'travelsite'))
    );

    $block_pattern_categories = apply_filters('travelsite_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'travelsite_register_pattern_category', 9);

function cf7_redirect_script() {
    ?>
    <script>
    document.addEventListener('wpcf7mailsent', function(event) {
        window.location.href = "https://cyhshipping.com/thank-you/";
    }, false);
    </script>
    <?php
}
add_action('wp_footer', 'cf7_redirect_script');

