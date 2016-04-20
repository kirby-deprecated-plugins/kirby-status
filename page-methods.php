<?php
// $page->isPublished()
page::$methods['isPublished'] = function($page) {
	$field_key = c::get('plugin.status.field.key', 'status');

	if( ! $page->{$field_key}()->exists() ) return true;
	if( $page->status()->value() === 'published' ) return true;
	return false;
};

// $page->isUnpublished()
page::$methods['isUnpublished'] = function( $page ) {
	$field_key = c::get('plugin.status.field.key', 'status');

	if( ! $page->{$field_key}()->exists() ) return false;
	if( $page->{$field_key}()->empty() ) return true;
	if( $page->{$field_key}() == 'unpublished' ) return true;
	return false;
};

// $page->isPrivate()
page::$methods['isPrivate'] = function($page) {
	$field_key = c::get('plugin.status.field.key', 'status');

	if( $page->{$field_key}() == 'private' ) return true;
	return false;
};

// $page->getStatus()
page::$methods['getStatus'] = function( $page ) {
	if( $page->isPublished() ) {
		return 'published';
	} elseif( $page->isUnpublished() ) {
		return 'unpublished';
	} elseif( $page->isPrivate() ) {
		return 'private';
	}
};