<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package keyword
 */

get_header(); ?>

	<div id="primary" class="content-area clear">
				
		<main id="main" class="site-main clear">

			<div class="breadcrumbs clear">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</div><!-- .breadcrumbs -->
		
			<?php get_template_part('template-parts/content', 'recent'); ?>

		</main><!-- .site-main -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

