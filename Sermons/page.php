<?php get_header(); ?>
<div id="content" class="page">
   
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
   <?php endwhile; endif; ?>
 </div>

<?php get_footer(); ?>
