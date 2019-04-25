<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_Ninja_Online
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog-post'); ?>>
	<div class="single-blog-post__meta">
		<?php
		foodninjaonline_posted_on();
		foodninjaonline_posted_by();
		?>
	</div>

	<div class="single-blog-post__image">
		<img src="<?php the_post_thumbnail_url(); ?>" alt="">
	</div>

	<h1 class="single-blog-post__title"><?php the_title(); ?></h1>

	<div class="single-blog-post__content">
		<?php the_content(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->