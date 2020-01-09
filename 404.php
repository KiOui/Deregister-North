<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package siteorigin-north
 * @license GPL 2.0 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<?php if( siteorigin_page_setting( 'page_title' ) ) : ?>
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'siteorigin-north' ); ?></h1>
					<?php endif; ?>
					<?php siteorigin_north_breadcrumbs(); ?>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'siteorigin-north' ); ?></p>
					<a href="<?php get_site_url();?>"><?php esc_html_e('Home', 'siteorigin-north'); ?></a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
