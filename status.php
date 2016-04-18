<?php
#require_once __DIR__ . DS . 'field' . DS . 'status.php';

// Register field
$kirby->set('field', 'status',  __DIR__ . DS . 'field');

pages::$methods['published'] = function($pages) {
	$pages = $pages->filterBy( 'status', '!=', 'private' );
	$pages = $pages->filterBy( 'status', '!=', 'unpublished' );
    return $pages;
};