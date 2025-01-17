<?php
remove_filter( 'the_content', 'wpautop' );	

add_filter('previous_post_link', 'jb_add_to_url');
add_filter('next_post_link', 'jb_add_to_url');
function jb_add_to_url( $link ) {
   $new = preg_replace('/href="([^"]+)"/', 'href="$1#wine-ind"', $link );
   return $new;
}

// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 

// CF7 hack
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_select_enum_rules', 20, 2 );

// ACF Allowed Tags
add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2 );
function acf_add_allowed_iframe_tag( $tags, $context ) {
   if ( $context === 'acf' ) {
      $tags['iframe'] = array(
         'src'             => true,
         'height'          => true,
         'width'           => true,
         'frameborder'     => true,
         'allowfullscreen' => true,
         'class'           => true,
      );

      $tags['script'] = array(
         'src' => true,
         'async' => true,
         'defer' => true,
         'charset' => true
      );

      $tags['link'] = array(
         'href' => true,
         'rel' => true,
         'title' => true,
         'type' => true
      );
   }

   return $tags;
}

// Remove ACF unsafe HTML notice 
add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );