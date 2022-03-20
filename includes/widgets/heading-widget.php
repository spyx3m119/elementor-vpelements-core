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
		return [ 'heading', 'dual heading', 'title' ];
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
 				'label' => esc_html__( 'Multi Color Heading', 'elementor-vpelements' ),
 				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
 			]
 		);

 		$this->add_control(
 			'vptitle1',
 			[
 				'label' => esc_html__( 'Start Text', 'elementor-vpelements' ),
 				'type' => \Elementor\Controls_Manager::TEXT,
 				'default' => esc_html__( 'Start ', 'elementor-vpelements' ),
				'placeholder' => esc_html__( 'Type your title here', 'elementor-vpelements' ),
				'dynamic' => [
					'active' => true,
				],
 			]
 		);
		$this->add_control(
			'vptitle2',
			[
				'label' => esc_html__( 'Middle Text', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Middle ', 'elementor-vpelements' ),
			    'placeholder' => esc_html__( 'Type your title here', 'elementor-vpelements' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'vptitle3',
			[
				'label' => esc_html__( 'End Text', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'End ', 'elementor-vpelements' ),
			    'placeholder' => esc_html__( 'Type your title here', 'elementor-vpelements' ),
				'dynamic' => [
					'active' => true,
				],
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
 			'vptitle1_color',
 			[
 				'label' => esc_html__( 'Start Text Color', 'elementor-vpelements' ),
 				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
 					'{{WRAPPER}} .vptitle1' => 'color: {{VALUE}};',
 				],
 			]
		);
		$this->add_control(
			'vptitle2_color',
			[
				'label' => esc_html__( 'Middle Text Color', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#C0392B',
 				'selectors' => [
					'{{WRAPPER}} .vptitle2' => 'color: {{VALUE}};',
				],
			]
	   );
	   $this->add_control(
			'vptitle3_color',
			[
				'label' => esc_html__( 'End Text Color', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vptitle3' => 'color: {{VALUE}};',
				],
			]
   		);

		$this->add_control(
			'font_family',
			[
				'label' => esc_html__( 'Font Family', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
				'selectors' => [
					'{{WRAPPER}} .vptitle' => 'font-family: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'font-size',
			[
				'label' => esc_html__( 'Middle Text Font Size', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 300,
						'step' => 1,
					]					
				],
				'selectors' => [
					'{{WRAPPER}} .vptitle2' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'tag_select',
			[
				'label' => esc_html__( 'Tag Style', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1'  => esc_html__( 'H1', 'elementor-vpelements' ),
					'h2' => esc_html__( 'H2', 'elementor-vpelements' ),
					'h3' => esc_html__( 'H3', 'elementor-vpelements' ),
					'h4' => esc_html__( 'H4', 'elementor-vpelements' ),
					'h5' => esc_html__( 'H5', 'elementor-vpelements' ),
					'div' => esc_html__( 'DIV', 'elementor-vpelements' ),
					'span' => esc_html__( 'SPAN', 'elementor-vpelements' ),
				],
			]
		);
 		$this->end_controls_section();

 		// Style Tab End

 	}

 	protected function render() {
 		$settings = $this->get_settings_for_display();
 		?>

 		<<?php echo $settings['tag_select'];?> class="vptitle"> 
			<span class ="vptitle1"><?php echo $settings['vptitle1'] ?> </span>
			<span class ="vptitle2"><?php echo $settings['vptitle2'] ?> </span>
			<span class ="vptitle3"><?php echo $settings['vptitle3'] ?> </span>
 		</<?php echo $settings['tag_select'];?>>
 		<?php
 	}	
 }
