<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 */

get_header(); ?>

<div class="main-container">
	<?php get_sidebar();
	include get_template_directory() . '/mobilemenu.php';

	if (is_page('trainer_innen')) {
		include get_template_directory() . '/sites/trainers.php';
	} elseif (is_page('referent_innen')) {
		include get_template_directory() . '/sites/referentinnen.php';
	} else {


		while (have_posts()) : the_post(); ?>
			<div id="content">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
</div>
<?php
	}
	get_footer(); ?>