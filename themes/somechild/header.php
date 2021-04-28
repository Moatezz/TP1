<?php

/**
 * The template for displaying code in the header section
 *
 * @version    0.1.40
 * @package    stylish-news
 * @author     Zidithemes
 * @copyright  Copyright (C) 2021 zidithemes.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'stylish-news'); ?></a>

		<?php

		if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {


		?>

			<div class="header-box">
				<div class="mg-auto header-box-flex wid-90 mobwid-90">
					<div class="logo wid-30 mobwid-100">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-text-link">
							<?php echo bloginfo('name'); ?>
						</a>
						<p class="site-info-desc"><?php echo bloginfo('description'); ?></p>
					</div>
				</div>
			</div>
			<div class='global-nav-container'>
				<!-- BEGIN NAV MENU -->
				<div class="flowid nav-outer">
					<div class="mg-auto wid-90 mobwid-100">
						<div class="nav">
							<input type="checkbox" class="navcheck" id="navcheck" />
							<label class="navlabel" for="navcheck"></label>
							<button class="panbtn" for="navcheck">
								<div class="mob-nav-one"></div>
								<div class="mob-nav-two"></div>
								<div class="mob-nav-three"></div>
							</button>
							<div class="site-mob-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" class="site-nav-title">
									<?php echo bloginfo('name'); ?>
								</a>
							</div>
							<div class="theme-nav">
								<ul class="logo logo-none">
									<li>
										<a href="<?php echo esc_url(home_url('/')); ?>" class="site-nav-title">
											<?php echo bloginfo('name'); ?>
										</a>
									</li>
								</ul>
								<ul class="nav-wrap" id="site-navigation">
									<?php
									if (has_nav_menu('primary-menu')) {
										wp_nav_menu(array(
											'theme_location' 	=> 'primary-menu',
											'menu_class'  		=> 'menu',
											'menu_id'        	=> 'primary-menu',
											'fallback_cb' 		=> '',
										));
									} else {

										wp_list_pages(
											array(
												'depth' => 1,
												'title_li' => ''
											)
										);
									}

									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- END NAV MENU -->
				<!-- START Breaking News Bar -->
				<div class="bnb-container">
					<div class="bnb-text-static-container">
						<p class="bnb-text-static">BREAKING NEWS</p>
					</div>
					<div class="bnb-text">
						<?php
						//Setting infinite post titles with the -1 value  
						$args = array(
							'numberposts' => -1
						);
						// Using get_posts to query all post titles
						$posts_list = get_posts($args);
						// duming() is the function responsable to wrap up every post_title when it is being mapped.
						function dumping($target)
						{
							echo '<div class="bnb-text-target">' . $target->post_title . '</div>';
						}
						//Mapping every post list.
						array_map('dumping', $posts_list)
						?>
					</div>
				</div>
			</div>
			<!-- END Breaking News Bar -->
		<?php } ?>