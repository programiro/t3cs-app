<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Add TypoScript Configuration to "Include static (from extensions):"
ExtensionManagementUtility::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'TYPO3 Site Configuration • TypoScript');

// Add TypoScript Configuration to "Include Page TSConfig (from extensions):"
ExtensionManagementUtility::registerPageTSConfigFile(
	$_EXTKEY,
	'Configuration/TsConfig/page.t3s',
	'TYPO3 Site Configuration • Page TSConfig');
