<?php

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // chargement de la feuille de style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    // chargement de la feuille de style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', ['parent-style']);
}

// demande à Wordpress de lancer la fonction `my_theme_enqueue_styles` durant le démarrage de l'application
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

