<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "wec_contentelements".
 *
 * Auto generated 28-08-2013 16:50
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'WEC Content Elements',
	'description' => 'Provides additional content elements such as a local menu, slideshow, Vimeo video, and YouTube video.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '1.2.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_weccontentelements/slideshow/,uploads/tx_weccontentelements/filedownload',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Web-Empowered Church Team',
	'author_email' => 'devteam@webempoweredchurch.org',
	'author_company' => 'Christian Technology Ministries International Inc.',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);