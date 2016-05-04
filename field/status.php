<?php
class StatusField extends BaseField {
	static public $assets = array( 'css' => array( 'style.min.css' ) );

	public function __construct() {
		$this->icon = 'chevron-down';
	}
	public function input() {
		$html = '';
		$options = array(
			'published' => 'Published',
			'unpublished' => 'Unpublished',
			'private' => 'Private',
		);

		$html .= tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'options' => $options,
			'field' => $this,
			'value' => $this->page()->getStatus(),
		));
		return $html;
	}
}