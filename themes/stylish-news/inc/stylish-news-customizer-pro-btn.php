<?php
	//PRO BTN
function stylish_news_pro_btn_customizer_settings( $wp_customize ){

	$wp_customize->register_section_type( 'Stylish_News_Customize_Section_Pro' );

	$wp_customize->add_section( new Stylish_News_Customize_Section_Pro( $wp_customize,'stylish-news-pro-btn-section', array(
				'priority' => 0,
				'pro_text' => esc_html__( 'Upgrade to Pro', 'stylish-news' ),
				'pro_url'  => esc_url('https://zidithemes.com/stylish-news-pro/')
			)
		)
	);

}


	

if( class_exists( 'WP_Customize_Section' ) ):	
/**
 * Pro customizer section.
 *
 * @since  1.0.0
 * @access public
 */
class Stylish_News_Customize_Section_Pro extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'pro-section';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand" style="display:list-item;">

			<h3 class="accordion-section-title">
				<# if ( data.title ) { #>
				{{ data.title }}
				<# } #>

				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-primary" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

endif;



function stylish_news_customizer_pro_btn_script() {

	wp_enqueue_style( 'stylish-news-customizer-pro-btn-style', get_template_directory_uri() .'/css/stylish-news-customizer-pro-btn-style.css');	

}

add_action( 'customize_controls_enqueue_scripts', 'stylish_news_customizer_pro_btn_script' );



add_action('customize_register', 'stylish_news_pro_btn_customizer_settings');