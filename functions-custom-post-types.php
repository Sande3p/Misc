<?php 


/* taxonomies */


add_action( 'init', 'create_hierarchical_taxonomy', 0 );

function create_hierarchical_taxonomy() {
/*
 *  category calendar
 * */
	// Add taxonomy, make it hierarchical like categories
	$name = "Category_cal";
	$labels = array(
			'name' => _x( 'Calendar Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Calendar Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Category' ),
			'all_items' => __( 'All Category' ),
			'parent_item' => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item' => __( 'Edit Category' ),
			'update_item' => __( 'Update Category' ),
			'add_new_item' => __( 'Add New Category' ),
			'new_item_name' => __( 'New Category Name' ),
			'menu_name' => __( 'Category' ),
	);

	// Now register the taxonomy

	register_taxonomy('category_cal',array('post'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'category_cal' ),
	));
	
/*
 *  category carousels
* */
	$name = "Category_caro";
	$labels = array(
			'name' => _x( 'Carousel Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Carousel Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Category' ),
			'all_items' => __( 'All Category' ),
			'parent_item' => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item' => __( 'Edit Category' ),
			'update_item' => __( 'Update Category' ),
			'add_new_item' => __( 'Add New Category' ),
			'new_item_name' => __( 'New Category Name' ),
			'menu_name' => __( 'Category' ),
	);
	
	// Now register the taxonomy
	
	register_taxonomy('category_caro',array('post'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'category_caro' ),
	));
	
	
/*
 *  category sponsors
* */
	$name = "Category_spon";
	$labels = array(
			'name' => _x( 'Sponsor Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Sponsor Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Category' ),
			'all_items' => __( 'All Category' ),
			'parent_item' => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item' => __( 'Edit Category' ),
			'update_item' => __( 'Update Category' ),
			'add_new_item' => __( 'Add New Category' ),
			'new_item_name' => __( 'New Category Name' ),
			'menu_name' => __( 'Category' ),
	);
	
	// Now register the taxonomy
	
	register_taxonomy('category_spon',array('post'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'category_spon' ),
	));

}


/* custom post type */

add_action ( 'init', 'custom_post_register' );
function custom_post_register() {
	
/* Calendar Post Type */
	$strPostName = 'Calendar';

	$labels = array (
			'name' => _x ( $strPostName . 's', 'post type general name' ),
			'singular_name' => _x ( $strPostName, 'post type singular name' ),
			'add_new' => _x ( 'Add New', $strPostName . ' Post' ),
			'add_new_item' => __ ( 'Add New ' . $strPostName . ' Post' ),
			'edit_item' => __ ( 'Edit ' . $strPostName . ' Post' ),
			'new_item' => __ ( 'New ' . $strPostName . ' Post' ),
			'view_item' => __ ( 'View ' . $strPostName . ' Post' ),
			'search_items' => __ ( 'Search ' . $strPostName ),
			'not_found' => __ ( 'Nothing found' ),
			'not_found_in_trash' => __ ( 'Nothing found in Trash' ),
			'parent_item_colon' => ''
	);

	$args = array (
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			'exclude_from_search' => false,
			'show_in_nav_menus' => true,
			'taxonomies' => array (
					'category_cal'
			),
			'supports' => array (
					'title',
					'editor',
					'page-attributes'
			)
	);

	register_post_type ( 'calendar', $args );
	

/* Carousel Post Type */	
	$strPostName = 'Carousel';
	
	$labels = array (
			'name' => _x ( $strPostName . 's', 'post type general name' ),
			'singular_name' => _x ( $strPostName, 'post type singular name' ),
			'add_new' => _x ( 'Add New', $strPostName . ' Post' ),
			'add_new_item' => __ ( 'Add New ' . $strPostName . ' Post' ),
			'edit_item' => __ ( 'Edit ' . $strPostName . ' Post' ),
			'new_item' => __ ( 'New ' . $strPostName . ' Post' ),
			'view_item' => __ ( 'View ' . $strPostName . ' Post' ),
			'search_items' => __ ( 'Search ' . $strPostName ),
			'not_found' => __ ( 'Nothing found' ),
			'not_found_in_trash' => __ ( 'Nothing found in Trash' ),
			'parent_item_colon' => ''
	);
	
	$args = array (
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			'exclude_from_search' => false,
			'show_in_nav_menus' => true,
			'taxonomies' => array (
					'category_caro'
			),
			'supports' => array (
					'title',
					'editor',
					'page-attributes',
					'post-formats'
			)
	);
	
	register_post_type ( 'carousel', $args );
	
/* Sponsors Post Type */
	$strPostName = 'Sponsor';
	
	$labels = array (
			'name' => _x ( $strPostName . 's', 'post type general name' ),
			'singular_name' => _x ( $strPostName, 'post type singular name' ),
			'add_new' => _x ( 'Add New', $strPostName . ' Post' ),
			'add_new_item' => __ ( 'Add New ' . $strPostName . ' Post' ),
			'edit_item' => __ ( 'Edit ' . $strPostName . ' Post' ),
			'new_item' => __ ( 'New ' . $strPostName . ' Post' ),
			'view_item' => __ ( 'View ' . $strPostName . ' Post' ),
			'search_items' => __ ( 'Search ' . $strPostName ),
			'not_found' => __ ( 'Nothing found' ),
			'not_found_in_trash' => __ ( 'Nothing found in Trash' ),
			'parent_item_colon' => ''
	);
	
	$args = array (
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			'exclude_from_search' => false,
			'show_in_nav_menus' => true,
			'taxonomies' => array (
					'category_spon'
			),
			'supports' => array (
					'title',
					'editor',
					'page-attributes',
					'thumbnail'
			)
	);
	
	register_post_type ( 'sponsor', $args );
	
	flush_rewrite_rules ( false );
}
