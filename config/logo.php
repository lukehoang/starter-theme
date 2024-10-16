<?php
function custom_logo_setup() {
  $defaults = array(
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, // WordPress 5.5+,
  );

  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

add_filter( 'get_custom_logo_image_attributes', 'my_logo_homepage_restore_alt', 10, 2 );
function my_logo_homepage_restore_alt( $custom_logo_attr, $custom_logo_id ) {
    $logo_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
    if ( is_front_page() ) {
        if ( ! empty ( $logo_alt ) ) {
            $custom_logo_attr["alt"] = $logo_alt;
        } else {
            $custom_logo_attr["alt"] = get_bloginfo( 'name', 'display' );
        }
    }
    return $custom_logo_attr;
}