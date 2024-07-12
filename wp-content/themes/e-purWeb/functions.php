<?php
function theme_enqueue_styles()
{
    // Chargement du style.css du theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css'));
}

function theme_enqueue_scripts()
{
    // Ajout de la bibliothèque Jquery
    wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    // Ajout de la bibliothèque Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3');

    // Votre script personnalisé doit dépendre de jQuery
    wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
}

// Action qui permet de charger des scripts et des styles dans notre theme
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function enregistrement_nav_menus()
{
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primaire', 'e-purweb'),
            'menu-2' => esc_html__('Secondaire', 'e-purweb'),
        )
    );
}
add_action('after_setup_theme', 'enregistrement_nav_menus');

