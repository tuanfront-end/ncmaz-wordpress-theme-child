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
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('ncmaz-style', 'ncmaz-style', 'ncmaz-styles-2', 'line-awesome', 'ncmaz-main-styles'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION


add_action('init', 'edentuan_ncmaz_child_user_guest_redirect');
function edentuan_ncmaz_child_user_guest_redirect()
{

    if (get_current_user_id() == 14 && is_admin()) {
        wp_redirect(home_url());
    }
}
