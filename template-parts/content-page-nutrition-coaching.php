<?php
/**
 * Template part for displaying page content for Nutrition Coaching
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



<?php
// check if the repeater field has rows of data
if (have_rows('how_it_works_step')) : ?>

  <h1 class="section-title section-title--center">How it works</h1>

  <?php
  // loop through the rows of data
  while (have_rows('how_it_works_step')) : the_row();
    // vars
    $image = get_sub_field('step_image');
    ?>

    <section class="hiw-step section" style="background-image: url(<?php echo $image['url']; ?>)">
      <div class="hiw-step-content">
        <h2 class="hiw-step-title"><?php the_sub_field('step_title'); ?></h2>
        <p class="hiw-step-description"><?php the_sub_field('step_description'); ?></p>
      </div>

      <?php if (get_sub_field('add_price_cards')) : ?>
        <div class="hiw-step-price-cards">
          <?php
          // loop through the rows of data
          while (have_rows('price_cards')) : the_row();
            $link = get_sub_field('price_card_button_link');
            ?>
            <div class="price-card">
              <h2 class="price-card-title"><?php the_sub_field('price_card_title'); ?></h2>
              <!-- <p class="price-card-price"><?php the_sub_field('price_card_price'); ?></p> -->
              <p class="price-card-description"><?php the_sub_field('price_card_description'); ?></p>
              <a href="<?php echo $link; ?>" class="btn btn--main btn--medium">Apply now</a>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </section>

  <?php endwhile;

else :

// no rows found

endif;

?>