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


// longitud excerpt----------------

function longitud_excerpt($length) {
    return 0;
}
add_filter('excerpt_length', 'longitud_excerpt');



// delete default [...] excerpt--------------

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');




////////register sidebar ------------

function myplugin_register_sidebar(){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$args = array(
			// 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			'id'            => 'unique-sidebar-id',
			'description'   => 'Barra Lateral Derecha',
			'name'   => 'Barra Lateral Productos'
			// 'class'         => '',
			// 'before_widget' => '<li id="%1" class="widget %2">',
			// 'after_widget'  => '</li>',
			// 'before_title'  => '<h2 class="widgettitle">',
			// 'after_title'   => '</h2>'
		);
	
		register_sidebar( $args );
	
}

add_action('widgets_init', 'myplugin_register_sidebar' );


function myplugin_register_sidebar2(){
     /**
    * Creates a sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
      // 'name'          => __( 'Sidebar name', 'theme_text_domain' ),
      'id'            => 'page-sidebar-id',
      'description'   => 'Sidebar page general',
      'name'   => 'Barra Lateral Páginas'
      // 'class'         => '',
      // 'before_widget' => '<li id="%1" class="widget %2">',
      // 'after_widget'  => '</li>',
      // 'before_title'  => '<h2 class="widgettitle">',
      // 'after_title'   => '</h2>'
    );
  
    register_sidebar( $args );
  
}

add_action('widgets_init', 'myplugin_register_sidebar2' );

// logo login
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/img/local.jpeg) !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

//logo admin
function no_wp_logo_admin_bar_remove() {        
    ?>
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
                content: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo-s.png)   !important;
                top: 0px;
/*                right: 0;
                z-index: 100000 !important;
*//*                display: none;
*/            }

            #wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
                pointer-events: none;
                cursor: default;
                top: 0px;
/*                right: 0;
                z-index: 100000 !important;
*/                display: none;

            }   
        </style>
    <?php
}
add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);

function remove_footer_admin () {
  echo "Administración Gatelín SRL Website";
} 

add_filter('admin_footer_text', 'remove_footer_admin');



//MODIFICAR ÍTEMS DEL ÁREA ADMINISTRACIÓN

add_action('admin_menu', 'remove_admin_menu_links');
function remove_admin_menu_links(){
    $user = wp_get_current_user();
    if( $user && isset($user->user_email) && 'aguja2013@gmail.com' == $user->user_email ) {
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        remove_menu_page('plugins.php');
  remove_menu_page('users.php');
  remove_menu_page('edit-comments.php');
  remove_menu_page('page.php');
  remove_menu_page('upload.php');
  remove_menu_page( 'edit.php?post_type=page' ); 
  remove_menu_page( 'edit.php?post_type=videos' );
  remove_menu_page( 'edit.php' );
  remove_submenu_page( 'themes.php', 'themes.php' );
    
    }
}

// //MODIFICAR ÍTEMS DEL ÁREA ADMINISTRACIÓN


// add_action( 'admin_menu', 'apk_eliminar_admin_menu_links' );

// function apk_eliminar_admin_menu_links() {

//     $user = wp_get_current_user(); //Obtenemos los datos del usuario actual
//         remove_menu_page( 'plugins.php' ); // Plugins 
//         remove_submenu_page( 'themes.php', 'themes.php' );
    
// }