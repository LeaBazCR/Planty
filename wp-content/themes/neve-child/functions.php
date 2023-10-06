<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style')
);
}

function ajouter_lien_menu_si_connecte($items, $args) {
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in() && $args->menu->term_id === 3) {
        // Créer le lien "Mon Compte"
        $lien_mon_compte = '<li class="menu-item menu-item-type-post_type menu-item-object-page"><div class="wrap"><a href="/wp-admin">Admin</a></div></li>';
         
        // Insérer le lien à une position spécifique
        $pos = strpos($items, '</li>', 2);
        if ($pos !== false) {
            $items = substr_replace($items, $lien_mon_compte, $pos + 5, 0);
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'ajouter_lien_menu_si_connecte', 10, 2);
// END ENQUEUE PARENT ACTION
