<?php
/**
 * @package nxcTwitterPublish
 * @author  Serhey Dolgushev <serhey.dolgushev@nxc.no>
 * @date    18 Jan 2010
 **/

class nxc_twitter_publishSettings extends nxcExtensionSettings {

	public $defaultOrder = 15;
	public $dependencies = array( 'nxc_twitter_api' );

	public function activate() {}

	public function deactivate() {}
}
?>