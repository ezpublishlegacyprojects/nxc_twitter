<?php
/**
 * @package nxcTwitter
 * @author  Serhey Dolgushev <serhey.dolgushev@nxc.no>
 * @date    21 May 2010
 **/

class nxc_twitter_feedSettings extends nxcExtensionSettings {

	public $defaultOrder = 15;
	public $dependencies = array( 'nxc_twitter_api' );

	public function activate() {}

	public function deactivate() {}
}
?>