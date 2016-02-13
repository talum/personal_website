<?php
//Main template
?>

<?php get_header(); ?>

<main>
	<?php // Customized

	if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</article>
	<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>