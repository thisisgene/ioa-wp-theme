<div class="sidebar-container">
	<div class="sidebar">
		<div class="sidebar--title">
			<a href="/">
				<div class="sidebar--title__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ioa-at-logo.png" alt="IOA Logo">
				</div>
				<div class="sidebar--title__text">
					<p>Initiative</p>
					<p>Outdoor</p>
					<p>Aktivitäten</p>
				</div>
			</a>
		</div>
		<div id="navigation-sub" class="sidebar--navigation">

			<?php wp_nav_menu(array(
				'menu' => 'side-menu'
			)); ?>

			<div class="small-menu">
				<?php wp_nav_menu(array(
					'menu' => 'side-sub-menu'
				)); ?>
			</div>

		</div>
	</div>
</div>