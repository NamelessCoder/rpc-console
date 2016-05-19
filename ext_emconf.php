<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "rpc_console".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RPC: Tasks for typo3_console',
	'description' => 'Provides RPC tasks for the typo3_console extension.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'cms,rpc',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Claus Due',
	'author_email' => 'claus@namelesscoder.net',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-8.1.99',
			'rpc' => '1.0.0-1.0.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
	'suggests' => array(
	),
);
