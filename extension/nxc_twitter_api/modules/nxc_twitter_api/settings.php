<?php
/**
 * @package nxcTwitterAPI
 * @author  Serhey Dolgushev <serhey.dolgushev@nxc.no>
 * @date    17 Sep 2010
 **/

$tpl = eZTemplate::factory();
$tpl->setVariable( 'connected', ( (int) $Params['connected'] === 1 ) );

$Result = array();
$Result['content'] = $tpl->fetch( 'design:twitter/settings.tpl' );
$Result['path']    = array(
	array(
		'text' => ezi18n( 'extension/nxc_twitter_api', 'Twitter Settings' ),
		'url'  => false
	)
);
?>