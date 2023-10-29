<?php
/**
 * @package Tic-tac-toe
 */
/*
Plugin Name: tic-tac-toe
Plugin URI: https://example.com/
Description: desc
Version: 0.1
Author: ÉQUIPE 2
Author URI: https://dgilbert.ca
Ce fichier configure et lance le plug-in pour Wordpress. Interprété côté serveur.
*/

require_once(plugin_dir_path(__FILE__) . 'class.tic-tac-toe_admin.php' );

add_shortcode( 'tic-tac-toe', 'showPage' );

// Charge le plug-in. Inclus index.php (HTML).
function showPage() {
    enqueueFiles();
    ob_start();
	include( "php/index.php" );
	return ob_get_clean();
}

// Possibilité d'inclure des librairies.
function enqueueFiles() {
    wp_register_script('TIC_TAC_TOE_JQUERY', 'https://code.jquery.com/jquery-3.6.0.min.js');
    wp_enqueue_script('TIC_TAC_TOE_JQUERY');

    wp_register_script('TIC_TAC_TOE_JS', plugin_dir_url( __FILE__ ) . 'js/tic-tac-toe.js');
    wp_enqueue_script('TIC_TAC_TOE_JS');

    wp_register_style('TIC_TAC_TOE_STYLE', plugin_dir_url( __FILE__ ) . 'css/style.css');
    wp_enqueue_style('TIC_TAC_TOE_STYLE');
}
