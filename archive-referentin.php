<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="navigation-sub">
		<?php wp_nav_menu( array(
    'theme_location' => 'primary',
) ); ?>
</div>
<div id="content">
	<h2>ReferentInnen</h2>
<?php query_posts($query_string . '&orderby=title&order=ASC'); ?>
<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>

<ul>
			
<div class="referentin">
	<div class="profile-img"><?php echo types_render_field( "profilbild", array() )?></div>
	<div class="kurzbio"><h4><?php echo types_render_field( "titel", array() ) ?> <?php echo types_render_field( "vorname", array() ) ?> <?php echo types_render_field( "nachname", array() ) ?></h4>	
	<?php echo types_render_field( "kurzbiografie", array() ) ?></div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>