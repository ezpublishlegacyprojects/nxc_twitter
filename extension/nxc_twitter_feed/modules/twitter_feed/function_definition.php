<?php
/**
 * @package nxcTwitterFeed
 * @author  Serhey Dolgushev <serhey.dolgushev@nxc.no>
 * @date    21 Sep 2010
 **/

$FunctionList = array();

$FunctionList['timeline'] = array(
	'name'             => 'timeline',
	'call_method'      => array(
		'class'  => 'nxcTwitterFeed',
		'method' => 'getTimeline'
	),
	'parameter_type'   => 'standard',
	'parameters'       => array(
		array(
			'name'     => 'type',
			'type'     => 'string',
			'required' => true,
			'default'  => 'user'
		),
		array(
			'name'     => 'parameters',
			'type'     => 'array',
			'required' => false,
			'default'  => array()
		)
	)
);

$FunctionList['user_info'] = array(
	'name'             => 'user_info',
	'call_method'      => array(
		'class'  => 'nxcTwitterFeed',
		'method' => 'getUserInfo'
	),
	'parameter_type'   => 'standard',
	'parameters'       => array()
);
?>