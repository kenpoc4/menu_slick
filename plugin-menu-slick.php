<?php
// Plugin name: Menú responsivo con base en slickNav
// Descripction: Personaliza el menú creado en Wordpress a responsivo.
// Version: 1.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

if(!defined('ABSPATH'))die();

function k_menu_plugin(){
    $assets_url    =   plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'slicknavCSS', $assets_url . '/assets/css/slicknav.min.css', array(), '1.0.0');
    wp_enqueue_style('k_menu_style', $assets_url . '/assets/css/k_menu_style.css', array(), '1.0.0');
    
    wp_enqueue_script( 'slicknavJS', $assets_url . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'k_menu_scripts', $assets_url . '/assets/js/k_menu_scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'k_menu_plugin' );