<section class="container section">
  <?php
  // check if the repeater field has rows of data
  if (have_rows('success_images')) : ?>
    <div class="images-row">
      <?php
      // loop through the rows of data
      while (have_rows('success_images')) : the_row();
        $successImage = get_sub_field('success_image');
        ?>
        <div class="success-image"><img src="<?php echo $successImage['url']; ?>" alt=""></div>


      <?php

    endwhile; ?>
    </div>
  <?php

endif; ?>
</section>

<section class="container section">
  <div class="content-container">
    <h2 class="section-title">Their story</h2>
    <?php the_content(); ?>
  </div>
</section>

<section class="container stats">
  <div class="stats-row-two">
    <h1 class="client-name">Name: <span><?php the_title(); ?></span></h1>
    <h1 class="client-location">Location: <span><?php the_field('location'); ?></span></h1>
  </div>
  <div class="stats-row-single">
    <h1 class="personal-goal">Personal goal: <span><?php the_field('personal_goal'); ?></span></h1>
  </div>
  <div class="stats-row">
    <div class="stat-name-header">Measured</div>
    <div class="before-value-header">Start</div>
    <div class="after-value-header">End</div>
    <div class="difference-header">Change</div>
  </div>

  <?php
  // check if the repeater field has rows of data
  if (have_rows('stats')) :

    // loop through the rows of data
    while (have_rows('stats')) : the_row(); ?>
      <div class="stats-row">
        <div class="stat-name"><?php the_sub_field('stat_name'); ?> <span><?php the_sub_field('metric'); ?></span></div>
        <div class="before-value"><?php the_sub_field('before_value'); ?></div>
        <div class="after-value"><?php the_sub_field('after_value'); ?></div>
        <div class="difference"><?php the_sub_field('difference'); ?></div>
      </div>

    <?php

  endwhile;

endif; ?>
</section>

<section class="container section">
  <div class="content-container">
    <h2 class="section-title">Non-scale wins</h2>
    <?php the_field('non-scale_wins'); ?>
  </div>
</section>