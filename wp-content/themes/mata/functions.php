<?php
/*
Author: Saulo Padilha
URL: htp://spadilha.com
*/

/************* DEFINE URLS *********************/
$themefolder = get_template_directory_uri();
$homeurl = get_home_url();
define('ROOTPATH', dirname(__FILE__));
define('THEMEPATH', $themefolder);
define('SITEHOME', $homeurl);


/************* OPTIONS PAGE *********************/
if( function_exists('acf_add_options_page') )
{
    $page = acf_add_options_page(array(
        'page_title'    => 'Conteúdo Site',
        'menu_title'    => 'Conteúdo Site',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options',
        'position'      => 2,
        'icon_url'      => 'dashicons-welcome-widgets-menus'
    ));
}


/************* THUMBNAIL SIZE OPTIONS *********************/
add_image_size( 'square', 356, 356, true);


/************* CALL CORE FUNCTIONS *********************/
require_once('functions/core.php');


/************* SANITIZE FILE NAME *********************/
require_once('functions/sanitize.php');



/************* REMOVE POST FROM ADMIN *********************/
add_action('admin_menu','remove_default_post_type');
function remove_default_post_type() {
    remove_menu_page('edit.php');
}


/************* CUSTOM EXCERPT *************/
function spa_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'spa_custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



/************* WRAP EMBEDS *********************/
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="embed-wrap fitvidz">' . $html . '</div>';
}


/*  Stop TinyMCE removing tags (span, etc) from editor */
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');


?>