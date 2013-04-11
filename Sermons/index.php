<?php get_header(); ?>
	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post png" id="post-<?php the_ID(); ?>">
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?>  <?php edit_post_link('Edit', '', ''); ?></p>
			</div>
<img class="hr png" alt="Horizontal rule" src="<?php bloginfo('template_directory')?>/images/arrow.png" />

		<?php endwhile; ?>

		<!--<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div> -->

	<?php else : ?>

		<h2 class="center">Not Found</h2>
   <p class="center">Sorry, but you are looking for something that isn&#39;t here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
