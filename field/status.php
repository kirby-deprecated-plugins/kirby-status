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

		// If not exist - Published
		if( ! $this->page()->{$this->name()}()->exists() ) {
			$value = 'published';
		// If empty - Unpublished
		} elseif( empty( $this->value() ) ) {
			$value = 'unpublished';
		// Else - Value
		} else {
			$value = $this->value();
		}

		#$value = ( ! empty( $this->value() ) ) ? $this->value() : 'published';
		$html .= tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'options' => $options,
			'field' => $this,
			'value' => $value,
		));
		return $html;
	}
}