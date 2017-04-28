<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes)
{
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

      // Add class if sidebar is active
    if (Setup\display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more()
{
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function ctaButtonCallback($atts, $content = null)
{
    $options = shortcode_atts([
        'link' => '',
    ], $atts);

    extract($options);
    ob_start();
    include get_template_directory() . '/templates/cta.php';
    return ob_get_clean();
}

add_shortcode('cta-button', __NAMESPACE__ . '\\ctaButtonCallback');

function colorPalette()
{
    $colors = [
        [
          'body' => '#F8E81C',
          'text' => '#111'
        ],
        [
          'body' => '#F6A623',
          'text' => '#111'
        ],
        [
          'body' => '#50E3C2',
          'text' => '#111'
        ]
    ];

    $randomKey = array_rand($colors, 1);

    $palette = $colors[$randomKey];

    extract($palette);

    ob_start();
    include get_template_directory() . '/templates/css.php';
    echo ob_get_clean();
}
add_action('wp_head', __NAMESPACE__ . '\\colorPalette');
