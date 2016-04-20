<?php
// $pages->published()
pages::$methods['published'] = function($pages) {
	return $pages->filterBy('isPublished', true);
};

// $pages->unpublished()
pages::$methods['unpublished'] = function($pages) {
	return $pages->filterBy('isUnpublished', true);
};

// $pages->private()
pages::$methods['private'] = function($pages) {
	return $pages->filterBy('isPrivate', true);
};

// $pages->privatePublished()
pages::$methods['privatePublished'] = function($pages) {
	$collection = new Pages();
	$collection->add( $pages->private() );
	$collection->add( $pages->published() );
	return $collection;
};