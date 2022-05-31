<?php
namespace Elementor;

class YourPlugin_WidgetName extends Widget_Base {
	
	public function get_name() {
		return 'widget-slug';
	}
	
	public function get_title() {
		return 'widget name';
	}
	
	public function get_icon() {
		return 'fas fa-square-full';
	}
	
	public function get_categories() {
		return [ 'theme-elements' ];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
			'general',
			['label' => "כללי",]
		);
		
		$this->add_control(
			'title',
			[
				'label' => "כותרת",
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
			]
		);

		
		$this->end_controls_section();
		
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();
        
        $title = $settings['title'];
        ?>
        <div>
            <div class="inner">
                <div class="item-content">
                    <div class="widget-content">
                        <?php if( $title && $title != '' ) echo '<h2>' . $title . '</h2>'; ?>
                    </div>
                </div>

            </div>

        </div>
        <?php

	}
	
}
