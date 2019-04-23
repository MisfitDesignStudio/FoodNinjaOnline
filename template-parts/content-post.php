<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_Ninja_Online
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card-wrapper'); ?>>

  <a href="<?php the_permalink(); ?>" class="blog-card"><object>

      <div class="blog-card__image">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      </div>

      <div class="blog-card__content">
        <a href="<?php the_permalink(); ?>" class="blog-card__title"><?php the_title(); ?></a>
        <div class="blog-card__target">
          <p class="blog-card__excerpt"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
          <a class="btn btn--xsmall btn--main" href="<?php the_permalink(); ?>">Contiue reading</a>
        </div>
      </div>

    </object></a>

</article><!-- #post-<?php the_ID(); ?> -->