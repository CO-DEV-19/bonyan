<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package keyword
 */

/**
 * Filter the except length to 45 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
if ( ! function_exists( 'keyword_custom_excerpt_length' ) ) :

function keyword_custom_excerpt_length( $length ) {
    return '45';
}
add_filter( 'excerpt_length', 'keyword_custom_excerpt_length', 999 );

endif;

/**
 * Customize excerpt more.
 */
if ( ! function_exists( 'keyword_excerpt_more' ) ) :

function keyword_excerpt_more( $more ) {
   return '&hellip;';
}
add_filter( 'excerpt_more', 'keyword_excerpt_more' );

endif;

/**
 * Display the first (single) category of post.
 */
if ( ! function_exists( 'keyword_first_category' ) ) :
function keyword_first_category() {
    $category = get_the_category();
    if ($category) {
      echo '<a href="' . esc_url( get_category_link( absint($category[0]->term_id) ) ) . ' " >' . esc_html($category[0]->name).'</a> ';
    }    
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
if ( ! function_exists( 'keyword_categorized_blog' ) ) :

function keyword_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'keyword_categories' ) ) ) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories( array(
            'fields'     => 'ids',
            'hide_empty' => 1,
            // We only need to know if there is more than one category.
            'number'     => 2,
        ) );

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count( $all_the_cool_cats );

        set_transient( 'keyword_categories', $all_the_cool_cats );
    }

    if ( $all_the_cool_cats > 1 ) {
        // This blog has more than 1 category so keyword_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so keyword_categorized_blog should return false.
        return false;
    }
}

endif;

/**
 * Flush out the transients used in keyword_categorized_blog.
 */
if ( ! function_exists( 'keyword_category_transient_flusher' ) ) :

function keyword_category_transient_flusher() {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Like, beat it. Dig?
    delete_transient( 'keyword_categories' );
}
add_action( 'edit_category', 'keyword_category_transient_flusher' );
add_action( 'save_post',     'keyword_category_transient_flusher' );

endif;