<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_font', trailingslashit(get_stylesheet_directory_uri()) . 'fonts/font.css', array());

        wp_enqueue_style('slick_css', trailingslashit(get_stylesheet_directory_uri()) . 'css/slick.css', array());
        wp_enqueue_style('slick_theme_css', trailingslashit(get_stylesheet_directory_uri()) . 'css/slick-theme.css', array());

        wp_enqueue_style('chld_thm_separate', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);



// enqueue scripts

function my_scripts_method()
{
    wp_enqueue_script(
        'slick-js',
        get_stylesheet_directory_uri() . '/js/slick.js',
        array('jquery'),
        '',
        true
    );

    wp_enqueue_script(
        'custom-js',
        get_stylesheet_directory_uri() . '/js/custom.js',
        array('jquery'),
        '',
        true
    );
}

add_action('wp_enqueue_scripts', 'my_scripts_method');


function vk9_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 'vk9', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'vk9',
                'title' => __( 'Block for VK9', 'gwg' ),
                'icon'  => '<svg width=\"26\" height=\"30\" viewBox=\"0 0 26 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g id=\"logo\" clip-path=\"url(#clip0_30_204)\"><path id=\"Vector\" d=\"M26.4083 23.7312L21.0833 29.0952C20.8535 29.3265 20.542 29.4563 20.2172 29.4563C19.8924 29.4563 19.5809 29.3265 19.3511 29.0952L14.2495 23.9568C14.0198 23.7254 13.7082 23.5955 13.3834 23.5955C13.0586 23.5955 12.747 23.7254 12.5173 23.9568L7.41624 29.0952C7.18647 29.3265 6.87496 29.4563 6.55017 29.4563C6.22538 29.4563 5.91387 29.3265 5.6841 29.0952L0.35852 23.7312C0.128971 23.4998 3.05176e-05 23.186 3.05176e-05 22.8589C3.05176e-05 22.5317 0.128971 22.218 0.35852 21.9865L13.3837 8.87005L20.4409 15.976L26.4083 21.9865C26.638 22.2179 26.767 22.5317 26.767 22.8589C26.767 23.1861 26.638 23.4998 26.4083 23.7312ZM18.7365 0.511719H8.03086C6.94112 0.511719 6.39624 1.84038 7.16506 2.61749L13.3837 8.86786L19.6023 2.61749C20.3738 1.84038 19.8273 0.511719 18.7365 0.511719Z\" fill=\"#00031E\"/></g></svg>',
            ),
        )
    );
}
add_filter( 'block_categories', 'vk9_block_categories' );


function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/fullwidth-slider');
    register_block_type(__DIR__ . '/blocks/product-info');
    register_block_type(__DIR__ . '/blocks/two-col-info');
}
add_action('init', 'register_acf_blocks');