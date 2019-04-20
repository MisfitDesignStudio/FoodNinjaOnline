<?php
/**
 * Template part for displaying page content for Success Stories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Food_Ninja_Online
 */

?>

<div class="page-hero">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  <h1 class="page-title"><?php the_title(); ?></h1>
</div>

<section class="main-content container section">
  <div class="content-container">
    <?php the_content(); ?>
  </div>
</section>

<section class="container section stories-section">
  <div class="success-stories-grid">
    <?php
    $successStoriesLoop = new WP_Query(
      array(
        'post_type' => 'success_story',
        'posts_per_page' => -1,
      )
    );

    while ($successStoriesLoop->have_posts()) :
      $successStoriesLoop->the_post(); ?>

      <div class="card card--success-story">
        <a href="<?php the_permalink(); ?>" class="card--success-story__image">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </a>
        <div class="card--success-story__content">
          <h2 class="card--success-story__client"><?php the_title(); ?></h2>
          <p class="card--success-story__excerpt"><?php echo wp_trim_words(get_the_content(), 20) ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn--main btn--xsmall">Read full story</a>
        </div>
      </div>

    <?php endwhile;
  ?>
  </div> <!-- end grid -->
</section> <!-- end section -->