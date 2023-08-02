/**
 * Add event listener to the button
 */
document.querySelector( '#twentytwentythreeclone-settings-button' ).addEventListener( 'click', settingsButtonClick );

function settingsButtonClick() {
	alert( __( 'Settings button clicked', 'twentytwentythreeclone' ) );
}