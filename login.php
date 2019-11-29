<?php

namespace webdeveric\WPTweaks;

function login_headerurl()
{
    return \get_bloginfo('url');
}

function login_headertext()
{
    return \get_option('blogname');
}

add_filter('login_headerurl', __NAMESPACE__ . '\login_headerurl');

add_filter('login_headertext', __NAMESPACE__ . '\login_headertext');
