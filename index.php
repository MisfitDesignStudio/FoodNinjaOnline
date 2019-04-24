<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_Ninja_Online
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="container section">
			<div class="blog-grid">
				<?php
				if (have_posts()) :

					/* Start the Loop */
					while (have_posts()) :
						the_post();
						get_template_part('template-parts/content', 'blog-index');

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
