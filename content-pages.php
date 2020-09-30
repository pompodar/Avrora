<?php /* Template Name: Контентная страница */ ?>
<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-зфпу', get_post_type() );
            /*
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'frame' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'frame' ) . '</span> <span class="nav-title">%title</span>',
				)
            );
            */
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
