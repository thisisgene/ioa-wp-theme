<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "navigation" div.
 *
 * @package WordPress
 * @subpackage ioa.at
 */

?>
<!DOCTYPE html>
<html lang="de" class="no-js">

<head>
	<title><?php wp_title('Initiative Outdoor Aktivitäten,', 'right'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/ioa-new/style.css" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11" />


	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
		window.addEventListener("load", function() {
			window.cookieconsent.initialise({
				"palette": {
					"popup": {
						"background": "#535c65"
					},
					"button": {
						"background": "transparent",
						"border": "#86ad38",
						"text": "#86ad38"
					}
				},
				"content": {
					"message": "Unsere Webseite verwendet Cookies, ausschließlich um die statistische Analyse der Seitenbenutzung zu ermöglichen. Die Daten werden anonymisiert verwendet.",
					"dismiss": "Einverstanden",
					"deny": "Ablehnen",
					"link": "Unsere Datenschutz-Policy",
					"href": "https://www.ioa.at/datenschutz"
				}
			})
		});
	</script>

	<?php
	include get_template_directory() . '/inc/favicons.php';
	wp_head();
	?>
</head>

<body <?php body_class(); ?> style="background-image: url('<?php echo get_background_custom(); ?>')">

	<div id="wrapper">