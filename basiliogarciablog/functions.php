<?php

/*
function basiliogarciablog_style() {
    wp_enqueue_style( 'main', get_stylesheet_uri(), array('normalize'), '1.0.0' );
    wp_enqueue_style( 'normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
}

add_action('wp_enqueue_scripts', 'basiliogarciablog_style');
*/

function basiliogarciablog_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'basiliogarciablog_setup');

function basiliogarciablog_menu() {
    register_nav_menus( array(
        'main' => __('Menú principal', 'basiliogarciablog'),
    ));
}
add_action('init', 'basiliogarciablog_menu');

function basiliogarcia_filter_menu_li_id($menu_id, $item, $args, $depth) {
    // Verifica si el menú es el 'main'
    if ($args->theme_location == 'main') {
        return ''; // Elimina el id de los <li>
    }
    return $menu_id;
}
add_filter('nav_menu_item_id', 'basiliogarcia_filter_menu_li_id', 10, 4);

function basiliogarcia_filter_menu_class($classes, $item, $args, $depth) {
    if ($args->theme_location == 'main') {
        // Limpia todas las clases
        $new_classes = [];

        // Añade las clases personalizadas del panel de control
        if (!empty($item->classes)) {
            $new_classes = $item->classes;
        }

        // Quita las clases predefinidas
        $new_classes = array_filter($new_classes, function($class) {
            // Excluye las clases predeterminadas de WordPress
            return !in_array($class, [
                    'current-menu-item',
                    'current_page_item',
                    'current_page_parent',
                    'menu-item',
                    'menu-item-home',
                    'menu-item-object-page',
                    'menu-item-type-post_type',
                    'page_item'
                ]
            );
        });

        // Quita todos los page-item-N
        $new_classes = array_filter($new_classes, function($value) {
            return !str_starts_with($value, 'page-item-');
        });

        // Añade la clase 'current' si el item es la página actual
        if (in_array('current-menu-item', $item->classes)) {
            $new_classes[] = 'current';
        }

        return $new_classes;
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'basiliogarcia_filter_menu_class', 10, 4);
