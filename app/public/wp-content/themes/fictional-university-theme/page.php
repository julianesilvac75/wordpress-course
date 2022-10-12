<?php
  get_header();

  while(have_posts()) {
    the_post(); //keeps track of each post we are currently working on ?>

    <h1>This is a page!!</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php
  }

  get_footer();
?>