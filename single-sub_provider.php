<?php
/**
 * The template for displaying all single posts.
 *
 * @package deregister-north
 */

include("wp-content/themes/deregister-north/404.php");
//header("location: " . get_site_url());

/*
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( has_post_format( array( 'gallery', 'video', 'image' ) ) ) {
				get_template_part( 'template-parts/content', get_post_format() );
			} else {
				get_template_part( 'template-parts/content', 'single' );
			} ?>

			<?php if ( siteorigin_setting( 'navigation_post' ) ) : ?>
				<?php siteorigin_north_the_post_navigation(); ?>
			<?php endif; ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
*/