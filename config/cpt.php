<?php
function cptui_register_my_cpts_portrait() {

/**
 * Post Type: portraits.
 */

$labels = [
    "name" => esc_html__( "Portraits", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "portrait", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "portraits", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "portrait", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-format-image",
    "supports" => [ "title", "editor", "thumbnail" ],
    "show_in_graphql" => false,
];

register_post_type( "portrait", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portrait' );


/**
 * Remove the slug from published post permalinks. Only affect our custom post type, though.
 */
function remove_cpt_slug( $post_link, $post ) {

    if ( 'portrait' === $post->post_type && 'publish' === $post->post_status ) {
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }

    return $post_link;
}
add_filter( 'post_type_link', 'remove_cpt_slug', 10, 2 );

/**
 * Have WordPress match postname to any of our public post types (post, page, race).
 * All of our public post types can have /post-name/ as the slug, so they need to be unique across all posts.
 * By default, WordPress only accounts for posts and pages where the slug is /post-name/.
 *
 * @param $query The current query.
 */
function add_cpt_post_names_to_main_query( $query ) {

	// Bail if this is not the main query.
	if ( ! $query->is_main_query() ) {
		return;
	}

	// Bail if this query doesn't match our very specific rewrite rule.
	if ( ! isset( $query->query['page'] ) || 2 !== count( $query->query ) ) {
		return;
	}

	// Bail if we're not querying based on the post name.
	if ( empty( $query->query['name'] ) ) {
		return;
	}

	// Add CPT to the list of post types WP will include when it queries based on the post name.
	$query->set( 'post_type', array( 'post', 'page', 'portrait' ) );
}
add_action( 'pre_get_posts', 'add_cpt_post_names_to_main_query' );