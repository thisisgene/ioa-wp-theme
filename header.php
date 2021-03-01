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
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,700,300italic,700italic' rel='stylesheet' type='text/css'>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<script src="https://use.fontawesome.com/ddbd68e35f.js"></script>
	<script src="/wp-content/themes/ioa-new/assets/js/script.js"></script>

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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-image: url('<?php echo get_background_custom(); ?>')">

	<div id="wrapper">
		<div id="header">
			<!-- Mobile Menu -->
			<span class="collapse">
				<p><button id="trigger-overlay" type="button" style="background:none;color:#fff;border:none;"><i class="fa fa-navicon fa-2x" aria-hidden="true"></i></button></p>
			</span>
		</div>
		<div class="overlay overlay-slidedown">
			<button type="button" class="overlay-close" style="background:none;color:#fff;border:none;"><i class="fa fa-close fa-2x" aria-hidden="true"></i></button>
			<nav>
				<?php wp_nav_menu(array('theme_location' => 'primary',)); ?>
			</nav>
		</div>