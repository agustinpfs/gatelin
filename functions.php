<?php

add_theme_support( 'post-thumbnails' );

add_image_size('custom', 60, 60);
add_image_size('cat', 160, 160, true);


function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer'),
                'menu-sidebar' => __('Menú del sidebar')
                )
        );
}
add_action('init', 'register_my_menus');