<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package keyword
 */

?>

<section class="no-results not-found content-shadow">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing found', 'keyword' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php esc_html_e( 'Ready to publish your first post?', 'keyword' );  ?> <a href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>"><?php esc_html_e( 'Get started here', 'keyword' ); ?></a>.
			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'keyword' ); ?></p>
			<?php
				//get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'keyword' ); ?></p>
			
			<?php
				//get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
