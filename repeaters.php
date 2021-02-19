<?php /* Template Name: Repeaters */ get_header(); ?>

  <?php get_template_part('templates/loop'); ?>

	<section>
		<h2>Cards</h2>

    <?php

    // Check rows exists.
    if( have_rows('cards') ):

        // Loop through rows.
        while( have_rows('cards') ) : the_row();
    ?>

    <article class="article-card">
      <h3 class="title"><?php the_sub_field('article_title'); ?></h3>
      <p class="description"><?php the_sub_field('article_excerpt'); ?></p>
      <a href="<?php the_sub_field('article_link'); ?>" class="link">Read More</a>

    </article>
<?php
        // End loop.
        endwhile;

    // No value.
    else :
?>
    <div>
      <p>There is no information to show</p>
    </div>
<?php
    endif;
?>
	</section>

<?php get_footer(); ?>
