<?php

/*
	Template Name: Nested Pages, Full Page, No Sidebar
*/

get_header();  ?>

<div class="nestedpage">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
 
</div> <!-- END OF NESTEDPAGE -->

<?php get_footer(); ?>

