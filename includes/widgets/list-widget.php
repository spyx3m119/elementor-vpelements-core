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
class Elementor_List_Widget extends \Elementor\Widget_Base {

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
		return 'vplist';
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
		return esc_html__( 'VPList', 'elementor-vpelements' );
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
		return 'eicon-bullet-list';
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
		return [ 'vplist', 'lists', 'ordered', 'unordered' ];
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

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'List Content', 'elementor-vpelements' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		/* Start repeater */

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'text',
			[
				'label' => esc_html__( 'Text', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'List Item', 'elementor-vpelements' ),
				'default' => esc_html__( 'Add List Item', 'elementor-vpelements' ),
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'elementor-vpelements' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'item_icon',
			[
				'label' => esc_html__( 'Icon', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'item_icon_color',
			[
				'label' => esc_html__( 'Change Icon Color', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);

		$repeater->add_control(
			'item_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%','em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 300,
						'step' => 1,
					]					
				],
			]
		);
		$repeater->add_control(
			'item_icon_spacing',
			[
				'label' => esc_html__( 'Icon Spacing', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%','em', 'rem' ],
				'default' => [
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 300,
						'step' => 1,
					]					
				],
			]
		);
		
		/* End repeater */

		$this->add_control(
			'list_items',
			[
				'label' => esc_html__( 'List Items', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),           /* Use our repeater */
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'elementor-vpelements' ),
						'link' => '',
					],
					[
						'text' => esc_html__( 'List Item #2', 'elementor-vpelements' ),
						'link' => '',
					],
					[
						'text' => esc_html__( 'List Item #3', 'elementor-vpelements' ),
						'link' => '',
					],
				],
				'title_field' => '{{{ elementor.helpers.renderIcon( this, item_icon, {}, "i", "panel" ) || \'<i class="{{ icon }}" aria-hidden="true"></i>\' }}} {{{ text }}}',
			]
		);

		$this->end_controls_section();

		
		$this->start_controls_section(
			'style_content_section',
			[
				'label' => esc_html__( 'List Style', 'elementor-vpelements' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Color', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .vplist-widget-item' => 'color: {{VALUE}};',
					'{{WRAPPER}} .vplist-widget-item > a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'icon_typography',
				'selector' => '{{WRAPPER}} .vplist-widget-item, {{WRAPPER}} .vplist-widget-item > a',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'selector' => '{{WRAPPER}} .vplist-widget-item',
			]
		);

		$this->add_control(
			'icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%','em', 'rem' ],
				'default' => [
					'size' => 25,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 300,
						'step' => 1,
					]					
				],
				'selectors' => [
					'{{WRAPPER}} .vplist-icon-wrapper' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'icon_spacing',
			[
				'label' => esc_html__( 'Adjust Icon Spacing', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%','em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					]					
				],
				'selectors' => [
					'{{WRAPPER}} .vplist-widget-text' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'text_vertical_pos',
			[
				'label' => esc_html__( 'Adjust Text Vertical Position', 'elementor-vpelements' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%','em', 'rem' ],
				'range' => [
					'px' => [
						'min' => -300,
						'max' => 300,
						'step' => 1,
					]					
				],
				'selectors' => [
					'{{WRAPPER}} .vplist-widget-text' => 'position:relative; top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render list widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$this->add_render_attribute( 'vplist', 'class', 'vplist-widget' );
		?>
		<div <?php $this->print_render_attribute_string( 'vplist' ); ?>>
			<?php
			foreach ( $settings['list_items'] as $index => $item ) {

				/**
				 * Get itemlist values and assign them to variables
				 */

				 // For item
				 $item_name = $settings['list_items'][$index]['text'];
				 $item_link = $settings['list_items'][$index]['link']['url'];
				 $item_text_vertical = $settings['list_items'][$index]['item_text_vertical'];
				 $item_text_vertical_pos = $settings['list_items'][$index]['item_text_vertical_pos']['size'] .  $settings['list_items'][$index]['item_text_vertical_pos']['unit'];
				 
				// For Icons
				 $item_icon_color = $settings['list_items'][$index]['item_icon_color'];
				 $item_icon_size =  $settings['list_items'][$index]['item_icon_size']['size'] .  $settings['list_items'][$index]['item_icon_size']['unit'];
				 $item_icon_spacing = $settings['list_items'][$index]['item_icon_spacing']['size'] . $settings['list_items'][$index]['item_icon_spacing']['unit'];

				?>

				<div class="vplist-widget-item">
					<?php 
				if ($item_link){ ?>	<a href="<?php echo $item_link; ?>"> <?php } ?>
					<span class="vplist-widget-icon vplist-icon-wrapper" style="color:<?php echo $item_icon_color;?>; font-size:<?php echo $item_icon_size; ?>; padding-right:<?php echo $item_icon_spacing; ?>;">
						<?php \Elementor\Icons_Manager::render_icon( $settings['list_items'][$index]['item_icon'], [ 'aria-hidden' => 'true' ] ); ?> 
					</span>
					<span class="vplist-widget-text"><?php echo $item_name ?></span>
					<?php
				if ($item_link){ ?>	</a> <?php } ?>

				</div>
				
				<?php
			}
			?>
		</div>
		<?php
	}

	/**
	 * Render list widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {
		
	}

}
