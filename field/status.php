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

	public function translate($string) {
		$translation = c::get('plugin.status.custom.translation', false);
		$language = site()->user()->data()['language'];
		if(!$translation) {
			$translations = require __DIR__ . DS . 'translations.php';
		 	if (! array_key_exists($language, $translations)) {
				$language = 'en';
		 	}
			$translation = $translations[$language];
		}
		if(array_key_exists($string, $translation)) {
			$string = $translation[$string];
		}
	 	return $string;
 }
}
