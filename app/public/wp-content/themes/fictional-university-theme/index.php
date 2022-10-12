<?php
  get_header();

  while(have_posts()) {
    the_post(); //keeps track of each post we are currently working on ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
    <?php
  }

  get_footer();
?>
