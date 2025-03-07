<?php


class WPCustomizer {

	private $customizer;
	private $currentPanel;
	private $currentSection;

	public function __construct($wp_customize) {
		$this->customizer = $wp_customize;
	}

	private function createIdFromName($name) {
		return strtolower(str_replace(' ', '_', $name));
	}

	public function addPanel($name, $description, $panelId=null, $priority=100) {
		if(empty($panelId)) {
			$panelId = strtolower(str_replace(' ', '_', $name));
		}
		$this->customizer->add_panel($panelId,
			array(
				'priority' => $priority,
				'title' => __($name),
				'description' => __($description),
			)
		);
		$this->currentPanel = $panelId;
		return $this;
	}
	public function addSection($sectionName, $priority=1, $sectionId=null) {
		if(empty($sectionId)) {
			$sectionId = strtolower(str_replace(' ', '_', $sectionName));
		}
		$this->customizer->add_section($sectionId,
			array(
				'title' => __($sectionName),
				'priority' => $priority,
				'panel' => $this->currentPanel,
			) 
		);
		$this->currentSection = $sectionId;
		return $this;
	}

	private function addSetting($id, $default="") {
		$this->customizer->add_setting($id,
			array(
				'default' => __($default),
				'sanitize_callback' => 'sanitize_text_field',
				'transport' => 'refresh',
			)
		);
		return $this;
	}
	private function addTextControl($id, $label, $description="", $priority=10) {
		$this->customizer->add_control($id,
			array(
				'type' => 'text',
				'priority' => $priority,
				'section' => $this->currentSection,
				'label' => $label,
				'description' => $description,
			) 
		);
		return $this;
	}

	public function addVar($id, $label, $description="", $default="") {
		$this->addSetting($id, $default);
		$this->addTextControl($id, $label, $description);
		return $this;
	}

}
