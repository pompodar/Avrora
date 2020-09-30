<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package frame
 */

get_header();
?>

	<div class="site-main">

		<section class="error-404 not-found">
			<div class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Такой страницы не существует.', 'frame' ); ?></h1>
			<img class="img_page_no_found" src=<?php echo get_home_url() . "/wp-content/themes/Avrora/img/404.png"; ?> alt="">
			</div><!-- .page-header -->
		</section><!-- .error-404 -->

	</div><!-- #main -->

<?php
get_footer();
