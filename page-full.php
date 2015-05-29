<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
<div class="frontWrapper">
 
  <h1>Johnson's Accounting</h1>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

   
    </div>
 
</div> <!-- /.main -->

<?php get_footer(); ?>

