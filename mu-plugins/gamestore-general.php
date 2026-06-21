<?php
/**
 * Plugin Name: Gamestore General
 * Discriptions: Core Code for Gamestore
 * Version: 1.0
 * Autor: Dmitry
 * Autor URI: http://kompasworks.ru
 * License: GPL2
 * License: URI: http://kompasworks.ru/about
 */
function gamestore_remove_dashboard_widgets(){
    global $wp_meta_boxes;
    
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
}
add_action('wp_dashboard_setup', 'gamestore_remove_dashboard_widgets');
