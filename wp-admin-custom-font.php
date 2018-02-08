<?php
/*
Plugin Name: WP Admin Custom Font
Plugin URI: https://www.wanekeyasam.co.ke
Description: A Simple Must-Use plugin to replace font(s) in WordPress Admin Dashboard.
Author: Wanekeya Sam
Author URI: https://www.wanekeyasam.co.ke
Version: 0.0.1
*/

if ( !defined('ABSPATH') ) {
    exit;
}
// WP Custom Font @ Admin General
function general_admin_custom_font() {
    echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">' . PHP_EOL;
    echo '<style>body, #wpadminbar *:not([class="ab-icon"]), .wp-core-ui, .media-menu, .media-frame *, .media-modal *{font-family:"Roboto", sans-serif !important;}</style>' . PHP_EOL;
}
add_action( 'admin_head', 'general_admin_custom_font' );
// WP Custom Font @ Admin Login Page
function login_page_admin_custom_font() {
    if(stripos($_SERVER["SCRIPT_NAME"], strrchr(wp_login_url(), '/')) !== false) {
        echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">' . PHP_EOL;
        echo '<style>body{font-family:"Roboto", sans-serif !important;}</style>' . PHP_EOL;
    }
}
add_action( 'login_head', 'login_page_admin_custom_font' );
// WP Custom Font @ Admin Bar Frontend
function frontend_admin_bar_custom_font() {
    if(current_user_can('administrator')) {
        echo '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">' . PHP_EOL;
        echo '<style>#wpadminbar *:not([class="ab-icon"]){font-family:"Roboto", sans-serif !important;}</style>' . PHP_EOL;
    }
}
add_action( 'wp_head', 'frontend_admin_bar_custom_font' );
?>