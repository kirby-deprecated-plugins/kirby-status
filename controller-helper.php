<?php
class status {
	// Redirect if unpublished or private
	public static function redirect( $page ) {
		if( $page->isUnpublished() ) {
			self::go( $page );
		} elseif( $page->isPrivate() ) {
			if( ! site()->user() ) {
				self::go( $page );
			}
		}
	}

	// Run redirect if not on error page
	public static function go( $page ) {
		$errorPage = site()->errorPage();
		if( $page->id() != $errorPage->id() ) {
			go( $errorPage );
		}
	}
}