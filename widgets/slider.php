<?php
class Elementor_Slider_Widget extends \Elementor\Widget_Base {
    public function get_name(){
        return 'slider_widget';
    }

    public function get_title(){
        return esc_html__('Slider', 'elementor-addon-halim');
    }

    public function get_icon(){
        return 'eicon-favorite';
    }

    public function get_custom_help_url(){
        return 'https://go.elementor/widget-name';
    }

    public function get_categories(){
        return ['elementor_addon_halim_category'];
    }

    public function get_keywords(){
        return ['slider', 'carousel'];
    }

    public function register_controls(){
        // Data Field
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Content', 'elementor-addon-halim' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slider_subheading', [
				'label' => esc_html__( 'Slider Subheading', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter subheading' , 'elementor-addon-halim' ),
				'label_block' => true,
                'show_label' => false,
			]
		);

		$repeater->add_control(
			'slider_heading', [
				'label' => esc_html__( 'Slider Heading', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter heading' , 'elementor-addon-halim' ),
				'label_block' => true,
                'show_label' => false,
			]
		);

		$repeater->add_control(
			'slider_content', [
				'label' => esc_html__( 'Slider Content', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Write here slider description' , 'elementor-addon-halim' ),
				'show_label' => true,
                'show_label' => false,
			]
		);

		$repeater->add_control(
			'slider_btn_title', [
				'label' => esc_html__( 'Slider Button Title', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter button title' , 'elementor-addon-halim' ),
                'label_block' => true,
                'show_label' => false,
			]
		);

		$repeater->add_control(
			'slider_btn_url', [
				'label' => esc_html__( 'Slider Button URL', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com' , 'elementor-addon-halim' ),
                'label_block' => true,
                'show_label' => false,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'elementor-addon-halim' ),
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'elementor-addon-halim' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

        $this->end_controls_section();

        // Style Field
        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__( 'content', 'elementor-addon-halim' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'section_subheading_style',
            [
                'label' => esc_html__('Section Subheading', 'elementor-addon-halim'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subheading_typography',
				'selector' => '{{WRAPPER}} .section-title h3 span',
			]
		);

        $this->add_control(
			'section_subheading_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-title h3 span' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
            'section_heading_style',
            [
                'label' => esc_html__('Section Heading', 'elementor-addon-halim'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .section-title h3',
			]
		);

        $this->add_control(
			'section_heading_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-title h3' => 'color: {{VALUE}}',
				],
			]
		);
        
        $this->add_control(
            'section_description_style',
            [
                'label' => esc_html__('Section Description', 'elementor-addon-halim'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );
        
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .section-title p',
			]
		);

        $this->add_control(
			'section_description_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-title p' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
            'section_broder_style',
            [
                'label' => esc_html__('Border Style', 'elementor-addon-halim'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

        $this->add_control(
			'section_broder_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon-halim' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-title:before, .section-title:after' => 'background-color: {{VALUE}}',
				],
                'default' => '#635cdb'
			]
		);

        $this->end_controls_section();
    }

    protected function render(){
        $settings            = $this->get_settings_for_display();
        $section_subheading  = $settings['section_subheading'];
        $section_heading     = $settings['section_heading'];
        $section_description = $settings['section_description'];
        ?>
    <div class="slider owl-carousel">
        <div class="single-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide-1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-table">
                            <div class="slide-tablecell">
                                <h4>We Are Advanced Batch 11</h4>
                                <h2>Digital Agency</h2>
                                <p>We are a passionate digital design agency that specializes in beautiful and
                                    easy-to-use digital design & web development services.</p>
                                <a href="#" class="box-btn">our projects <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide-2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-table">
                            <div class="slide-tablecell">
                                <h4>We Are Halim</h4>
                                <h2>Modern Agency</h2>
                                <p>We are a passionate digital design agency that specializes in beautiful and
                                    easy-to-use digital design & web development services.</p>
                                <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide-3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slide-table">
                            <div class="slide-tablecell">
                                <h4>
                                    We Are Halim
                                </h4>
                                <h2>Creative Agency</h2>
                                <p>We are a passionate digital design agency that specializes in beautiful and
                                    easy-to-use digital design & web development services.</p>
                                <a href="#" class="box-btn">crreative team <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }

}