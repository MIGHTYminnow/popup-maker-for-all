/**
 * Set focus on first input after opening the popup.
 */
jQuery(document).on( 'pumAfterOpen', function(){
	jQuery( '.pum-overlay[aria-hidden="false"] .gfield input' ).first().focus();
});
