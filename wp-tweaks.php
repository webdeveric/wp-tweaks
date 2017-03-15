<?php
/*
Plugin Name: WP Tweaks
Plugin Group: Configuration
Plugin URI: http://phplug.in/
Description: Miscellaneous WordPress tweaks
Version: 1.0.0
Author: Eric King
Author URI: http://webdeveric.com/
*/

namespace webdeveric\WPTweaks;

include WPMU_PLUGIN_DIR . '/wp-tweaks/helpers.php';
include WPMU_PLUGIN_DIR . '/wp-tweaks/common.php';
include WPMU_PLUGIN_DIR . '/wp-tweaks/login.php';

if (is_admin()) {
    include WPMU_PLUGIN_DIR . '/wp-tweaks/admin.php';
}
