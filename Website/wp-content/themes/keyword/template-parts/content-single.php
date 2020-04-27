<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package keyword
 */	
?>

<div class="breadcrumbs single-breadcrumbs">
	<span class="breadcrumbs-nav">
		<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e('Home', 'keyword'); ?></a>
		<span class="post-category"><?php keyword_first_category(); ?></span>
		<span class="post-title"><?php the_title(); ?></span>
	</span>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="thumbnail-wrap">
			<?php 
				the_post_thumbnail('keyword_post_thumb'); 
			?>
		</div><!-- .thumbnail-wrap -->
	<?php } ?>	
	
	<header class="entry-header <?php if (!( has_post_thumbnail() && ( get_the_post_thumbnail() != null ) ) ) { echo 'no-thumbnail'; }  ?>">

		<?php get_template_part( 'template-parts/entry', 'meta' ); ?>
		
		<h1 class="entry-title"><?php the_title(); ?></h1>		

		<div class="entry-category">
			<span>
				<?php esc_html_e('Category:', 'keyword'); ?>
				<?php keyword_first_category(); ?>
			</span> 
		</div> 	

	</header>

	<div class="entry-content customized-content">

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'keyword' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'keyword' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">

		<div class="entry-tags">

			<?php if (has_tag()) { ?><span class="tag-links"><?php the_tags(' ', ' '); ?></span><?php } ?>

			<?php if ( get_edit_post_link() ) : ?>
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'keyword' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			<?php endif; ?>

		</div><!-- .entry-tags -->

	</div><!-- .entry-footer -->

</article><!-- #post-## -->

<div class="single-newsletter">
	<?php
		dynamic_sidebar( 'header-newsletter' );  
	?>
</div><!-- .single-newsletter -->

<div class="author-box clear">
	<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?></a>
	<div class="author-meta">	
		<h4 class="author-name"><?php esc_html_e('About the Author:', 'keyword'); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><?php the_author_meta('display_name'); ?></a></span></h4>	
		<div class="author-desc">
			<?php 
				the_author_meta('description'); 
			?>
		</div>
	</div>
</div><!-- .author-box -->