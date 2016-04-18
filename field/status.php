<?php
class StatusField extends BaseField {
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

		$value = ( ! empty( $this->value() ) ) ? $this->value() : 'unpublished';
		$html .= tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'options' => $options,
			'field' => $this,
			'value' => $value,
		));
		return $html;
	}
}