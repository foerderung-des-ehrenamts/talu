<?php

/**
 * Loop Modifications
 * 
 * @package talu
 * @since 0.1
 */

/**
 * Sort the loop post type medienspiegel
 *
 * @since 0.1
 */

function talu_sort_the_loop_medienspiegel( $query ) {
	
	// Do not modify queries in the admin
	if( is_admin() ) {
		
		return $query;
		
	}
	
	// Only modify queries for 'medienspiegel' post type
	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'medienspiegel' ) {
        
        // Sort base = Date
		$query->set('orderby', 'meta_value');	
		$query->set('meta_key', 'talu_newspaper_article_date');	 
		$query->set('order', 'DESC'); 
		
	}
	
	// Return
	return $query;

}

add_action('pre_get_posts', 'talu_sort_the_loop_medienspiegel');

/**
 * Increase the amount of posts for medienspiegel
 *
 * @since 0.1
 */

function talu_medienspiegel_change_posts_per_page( $query ) {

    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'medienspiegel' ) ) {
       $query->set( 'posts_per_page', 999 );
    }
}

add_filter( 'pre_get_posts', 'talu_medienspiegel_change_posts_per_page' );

?>