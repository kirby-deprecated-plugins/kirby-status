<?php
// $pages->published()
pages::$methods['published'] = function($pages) {
	foreach( $pages->data as $key => $item ) {
		if( $item->getStatus() != 'published' ) unset( $pages->$key );
	}
	return $pages;
};

// $pages->unpublished()
pages::$methods['unpublished'] = function($pages) {
	foreach( $pages->data as $key => $item ) {
		if( $item->getStatus() != 'unpublished' ) unset( $pages->$key );
	}
	return $pages;
};

// $pages->private()
pages::$methods['private'] = function($pages) {
	foreach( $pages->data as $key => $item ) {
		if( $item->getStatus() != 'private' ) unset( $pages->$key );
	}
	return $pages;
};