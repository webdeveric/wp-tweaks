<?php

namespace webdeveric\WPTweaks;

function remove_wp_logo()
{
    global $wp_admin_bar;

    if (isset($wp_admin_bar) && method_exists($wp_admin_bar, 'remove_menu')) {
        $wp_admin_bar->remove_menu('wp-logo');
    }
}

add_action('wp_before_admin_bar_render', __NAMESPACE__ . '\remove_wp_logo', 0);

add_filter('the_generator', '__return_empty_string');

if ( ( isset( $_SERVER['HTTP_X_FORWARDED_SCHEME'] ) && $_SERVER['HTTP_X_FORWARDED_SCHEME'] === 'https' ) ||
     ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] )  && $_SERVER['HTTP_X_FORWARDED_PROTO']  === 'https' ) ){
    $_SERVER['HTTPS'] = 'on';
}
