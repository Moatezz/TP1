<?php
//options

function stylish_news_theme_info_menu() {

	add_theme_page( 
		esc_html__('Welcome To Stylish News WordPress Theme', 'stylish-news'), 
		esc_html__('Stylish News Theme Info', 'stylish-news'), 
		'manage_options', 
		'stylish_news_theme_info_options', 
		'stylish_news_theme_info_display' 
	);

}


add_action( 'admin_menu', 'stylish_news_theme_info_menu' );



function stylish_news_theme_info_display() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( esc_html_e( 'You do not have sufficient permissions to access this page.', 'stylish-news' ) );
	}
	
	?>
	<div class="wrap stylish-news-adm">
		<h1 class="header-welcome"><?php esc_html_e('Welcome to Stylish News - 0.1.40', 'stylish-news'); ?></h1>
		<div class="stylish-news-adm-dsply-fl stylish-news-adm-fl-wrap stylish-news-adm-jc-sp-btw">

			<div class="stylish-news-adm-wid-49 theme-para theme-doc stylish-news-adm-mobwid-100">
				<h4><?php esc_html_e('Theme Documentation','stylish-news'); ?></h4>
				<p><?php esc_html_e('Documentation for this theme includes all theme information that is needed to get your site up and running', 'stylish-news'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.com/stylish-news-free/'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Theme Documentation', 'stylish-news'); ?>
					</a>
				</p>
			</div>

			<div class="stylish-news-adm-wid-49 theme-para theme-opt stylish-news-adm-mobwid-100">
				<h4><?php esc_html_e('Stylish News Pro','stylish-news'); ?></h4>
				<p class="">
					<?php esc_html_e('Stylish News Pro includes portfolio page templates, additional features and more options to customize your website.',  'stylish-news'); ?>
				</p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.com/stylish-news-pro/'); ?>" class="button button-primary" target="_blank">
						<?php esc_html_e('Upgrade to Stylish News Pro', 'stylish-news'); ?>
					</a>
				</p>
			</div>

			<div class="stylish-news-adm-wid-49 theme-para theme-opt stylish-news-adm-mobwid-100">
				<h4><?php esc_html_e('Theme Options','stylish-news'); ?></h4>
				<p class="">
					<?php esc_html_e('Stylish News Theme supports Theme Customizer. Click "Go To Customizer" to open the Customizer now.',  'stylish-news'); ?>
				</p>
				<p>
					<a href="<?php echo esc_url(admin_url('customize.php')); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Go To Customizer', 'stylish-news'); ?>
					</a>
				</p>
			</div>
			
			<div class="stylish-news-adm-wid-49 theme-para theme-doc stylish-news-adm-mobwid-100">
				<h4><?php esc_html_e('Watch Tutorial on Stylish News','stylish-news'); ?></h4>
				<p><?php esc_html_e('Watch Youtube tutorial on how to install and use Stylish News theme.', 'stylish-news'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://www.youtube.com/watch?v=uDdMA1l2atE'); ?>" class="button button-secondary button-youtube" target="_blank">
						<?php esc_html_e('Watch Stylish News Tutorial', 'stylish-news'); ?>
					</a>
				</p>
			</div>

			<div class="stylish-news-adm-wid-49 theme-para theme-review stylish-news-adm-mobwid-100">
				<h4><?php esc_html_e('Leave us a review','stylish-news'); ?></h4>
				<p><?php esc_html_e('We would love to hear your feedback.', 'stylish-news'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/stylish-news/reviews/#new-post'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Submit a review', 'stylish-news'); ?>
					</a>
				</p>
			</div>


			<div class="stylish-news-adm-wid-49 theme-para theme-support stylish-news-adm-mobwid-100">
				<h4><?php esc_html_e('Support','stylish-news'); ?></h4>
				<p><?php esc_html_e('Reach out in the theme support forums on WordPress.org.', 'stylish-news'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/stylish-news/'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Support Forum', 'stylish-news'); ?>
					</a>
				</p>
			</div>


			<div class="theme-upgrade stylish-news-adm-wid-100">
				<table class="stylish-news-adm-wid-100">
					<thead class="theme-table-head">
						<tr>
							<th class="feature"><h3><?php esc_html_e('Features', 'stylish-news'); ?></h3></th>
							<th class="stylish-news-adm-wid-33"><h3><?php esc_html_e('Stylish News', 'stylish-news'); ?></h3></th>
							<th class="stylish-news-adm-wid-33"><h3><?php esc_html_e('Stylish News Pro', 'stylish-news'); ?></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Number Of Featured Section Styles', 'stylish-news'); ?></h3></td>
							<td><span class="number-index-styles"><?php esc_html_e('2', 'stylish-news'); ?></span></td>
							<td><span class="number-index-styles"><?php esc_html_e('10', 'stylish-news'); ?></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Number Of Index Page Styles', 'stylish-news'); ?></h3></td>
							<td><span class="number-index-styles"><?php esc_html_e('2', 'stylish-news'); ?></span></td>
							<td><span class="number-index-styles"><?php esc_html_e('14', 'stylish-news'); ?></span></td>
						</tr>
						<tr>
							<td class="feature-items-title">
								<h3><?php esc_html_e('Theme Price', 'stylish-news'); ?></h3>
							</td>
							<td class="free-btn"><?php esc_html_e('Free', 'stylish-news'); ?></td>
							<td>
								<a class="pro-link-btn" href="<?php echo esc_url('https://zidithemes.com/stylish-news-pro/'); ?>" target="_blank">
									<?php esc_html_e('View Pricing', 'stylish-news'); ?>
								</a>
							</td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Responsive Design', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Portfolio Page Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Testimonials Page Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Team Page Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Gallery Page Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Pricing Page Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('One Column Post Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('3 News Grid Image Styles', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Full Width Template', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Footer Credits Options', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Color Options', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Gutenberg Compatible', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Elementor Compatible', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Major Browser Compatible', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Woocommerce Compatible', 'stylish-news'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="go-pro">
								<span class="">
									<a class="link" href="<?php echo esc_url('https://zidithemes.com/stylish-news-pro/'); ?>" target="_blank">
										<?php esc_html_e('View Pro', 'stylish-news'); ?>
									</a>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
	<?php
}
?>
