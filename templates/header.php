<header class="header">
	<div class="fixed-navbar">
		<div class="container">
			<nav class="nav-container clearfix">
				<div class="logo">
					<a href="<?= esc_url(home_url('/')); ?>">Jins<strong>Abacus</strong></a>
				</div>
				<?php
				if (has_nav_menu('primary_navigation')) :
					wp_nav_menu([
						'theme_location' => 'primary_navigation',
						'container_class' => 'menu-container',
						'menu_class' => 'menu',
						'depth' => 1]);
				endif;
				?>
			</nav>
		</div>
		<button class="nav-button">
			<span class="ham-menu">
				<i class="top_line"></i>
				<i class="mid_line"></i>
				<i class="bot_line"></i>
			</span>
		</button>
	</div>
</header>