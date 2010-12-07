<?php
/**
 * @package nxcTwitterSignin
 * @author  Serhey Dolgushev <serhey.dolgushev@nxc.no>
 * @date    25 Nov 2010
 **/

class nxc_twitter_signinSettings extends nxcExtensionSettings {

	public $defaultOrder = 15;
	public $dependencies = array( 'nxc_twitter_api' );

	public function activate() {}

	public function deactivate() {}
}
?>