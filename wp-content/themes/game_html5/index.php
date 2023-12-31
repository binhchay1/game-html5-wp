<?php

get_header();
?>

<body class="items index games-active">
	<nav class="navbar">
		<div class="container">
			<div class="y8-navbar-left">
				<div class="mobile-burger-menu">
					<span class="burger-btn">
						<img width="20" height="17" class="hamburger-icon" alt="Menu" src="<?php echo get_template_directory_uri() . '/svg/hamburger.svg' ?>" />
						<img width="16" height="16" class="hamburger-active-icon" alt="Menu" src="<?php echo get_template_directory_uri() . '/svg/hamburger.svg' ?>" />
					</span>
				</div>
				<div class="logo">
					<a class="no-event" aria-label="logo" href="/">
						<img width="50" height="50" alt="<?php echo get_bloginfo() ?>" src="<?php echo get_template_directory_uri() . '/images/black-logo-no-background.png' ?>" />
					</a>
				</div>
				<div class="mobile-search-user-container">
					<div class="search-btn" id="mobile-search-icon">
						<img width="28" height="28" alt="Caută jocuri" src="<?php echo get_template_directory_uri() . '/svg/search.svg' ?>" />
					</div>
					<div class="profile-btn">
						<?php if (is_user_logged_in()) { ?>
							<img class="profile-icon avatar" alt="Profile" src="<?php echo get_avatar_url(get_current_user_id()); ?>" id="profile-icon-image" />
						<?php } else { ?>
							<img class="profile-icon avatar" alt="Profile" src="<?php echo get_template_directory_uri() . '/images/default-avatar.png' ?>" id="profile-icon-image" />
						<?php } ?>
						<img class="arrow-up-icon" alt="Profile" src="<?php echo get_template_directory_uri() . '/svg/arrow-up.svg' ?>" id="arrow-up-image" />
					</div>
				</div>
			</div>

			<form id="items-search-form" class="navbar-form" action="search" accept-charset="UTF-8" method="post">
				<input type="text" name="q" id="q" placeholder="Caută jocuri" class="form-control query fake-button" required="required" />
				<button type="submit" aria-label="Search">
					<i class="y-icon y-icon--search"></i>
				</button>
				<span class="close-search-form"></span>
			</form>

			<div class="y8-navbar-right">
				<a style="text-decoration: none;" href="/news-game">
					<div class="fake-button js-top-menu two-lines btn-header-actions new-games">
						Joc nou
						<span class="sub-title">
							in luna
						</span>
					</div>
				</a>

				<a style="text-decoration: none;" href="/best-game">
					<div class="fake-button js-top-menu two-lines btn-header-actions browse">
						Jocuri populare
						<span class="sub-title">sunt ingrijorati
						</span>
						<div class="with-notification"></div>
					</div>
				</a>

				<div class="mobile-header-block">
					<div class="popular-newest-games-links">
						<a class="games-link new-game fake-button" title="Jocuri online gratuite la <?php echo get_bloginfo() ?>" href="/news-game">Joc nou</a>
						<a class="games-link pop-game fake-button" title="Jocuri online gratuite la <?php echo get_bloginfo() ?>" href="/best-game">Jocuri populare</a>
					</div>
				</div>

				<div id="locale-selector-dropdown" class="locale-selector-dropdown fake-button">
					<div id="button-flag" onclick="dropDownLocate()">
						<img src="<?php echo get_template_directory_uri() . '/svg/flag/ro.svg' ?>" class="image-flag" alt="Ngôn ngữ mặc định">
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top: 30px;">
		<?php if (is_front_page() && is_home()) { ?>
			<?php get_template_part('template-parts/homepage', 'heading'); ?>
		<?php } else { ?>
			<div class="category_menu">
				<nav class="cat_menu">
					<div class="menu_title parent_cat_name">
						<h6><?php echo $category->name; ?></h6>
					</div>
					<?php rs_left_menu_subcats($subcategories); ?>
				</nav>
			</div>
		<?php } ?>
	</div>
	<?php get_footer() ?>
	<div class="dark-overlay"></div>
	<div class="policy-validation" id="policy-validation" style="display: none;">
		<div style="display: flex;">
			<div class="logo">
				<img width="59" height="27" alt="Gamekafe" src="<?php echo get_template_directory_uri() . '/images/black-logo-no-background.png' ?>" />
			</div>
			<div class="content">
				Folosim cookie-uri pentru a recomanda conținut și pentru a analiza traficul și publicitatea. Prin utilizarea acestui site, sunteți de acord cu <a target="_blank" rel="nofollow" href="/privacy">Politica de confidențialitate</a>
				și <a target="_blank" rel="nofollow" href="/cookie-policy">Politica de cookie-uri</a>
			</div>
			<div class="actions" onclick="storeAccepted('accepted')">
				<span class="validate-policy">Înțeles</span>
			</div>
		</div>
	</div>

	<script src="js/plugins/jquery/jquery.min.js"></script>
	<script src="js/page/main.js"></script>
	<script src="js/admin/user.js"></script>
</body>

<?php
