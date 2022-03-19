<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_Heading_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve list widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vpheading';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve list widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'VPHeading', 'elementor-vpelements' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve list widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-editor-h1';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.vladparole.info/wpelements/docs/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'vpElements' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'heading', 'keywords', 'keyword2', 'keyword3' ];
	}

	/**
	 * Register list widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	 protected function register_controls() {

 		// Content Tab Start

 		$this->start_controls_section(
 			'section_title',
 			[
 				'label' => esc_html__( 'Title', 'elementor-vpelements' ),
 				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
 			]
 		);

 		$this->add_control(
 			'title',
 			[
 				'label' => esc_html__( 'Title', 'elementor-vpelements' ),
 				'type' => \Elementor\Controls_Manager::TEXTAREA,
 				'default' => esc_html__( 'Hello world', 'elementor-vpelements' ),
 			]
 		);

 		$this->end_controls_section();

 		// Content Tab End


 		// Style Tab Start

 		$this->start_controls_section(
 			'section_title_style',
 			[
 				'label' => esc_html__( 'Title', 'elementor-vpelements' ),
 				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
 			]
 		);

 		$this->add_control(
 			'title_color',
 			[
 				'label' => esc_html__( 'Text Color', 'elementor-vpelements' ),
 				'type' => \Elementor\Controls_Manager::COLOR,
 				'selectors' => [
 					'{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
 				],
 			]
 		);

 		$this->end_controls_section();

 		// Style Tab End

 	}

 	protected function render() {
 		$settings = $this->get_settings_for_display();
 		?>

 		<h1 class="hello-world">
 			<?php echo $settings['title']; ?>
 		</h1>

 		<?php
 	}
 }
