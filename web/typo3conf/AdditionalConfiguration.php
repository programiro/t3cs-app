<?php
/*
 * Environment setup - use one of DEV/PREV/LIVE
 */

use TYPO3\CMS\Core\Utility\ArrayUtility;

// Define application environment
// and database configuration based on hostname
switch ( $_SERVER['HTTP_HOST'] ) {
  case "192.168.0.179:8000": // Local IP Miro Mac
	case "localhost:8000":
		define( 'ENVIRONMENT', 'DEV' );
		include dirname( __FILE__ ) . '/AdditionalConfiguration-DEV.php';
		break;

	case "preview.domain.de":
		define( 'ENVIRONMENT', 'PREV' );
		define( 'TYPO3_CONTEXT', 'Production/Staging' );
		include dirname( __FILE__ ) . '/AdditionalConfiguration-PREV.php';
		break;

	case "domain.de":
	default:
		define( 'ENVIRONMENT', 'LIVE' );
		define( 'TYPO3_CONTEXT', 'Production' );
		include dirname( __FILE__ ) . '/AdditionalConfiguration-LIVE.php';
		break;
}

if ( file_exists( dirname( __FILE__ ) . '/PrivateSettings.php' ) ) {
	include dirname( __FILE__ ) . '/PrivateSettings.php';
}

$localConfiguration = $GLOBALS['TYPO3_CONF_VARS'];

if ( is_array( $localConfiguration ) ) {
	$additionalConfiguration                    = array();
	$additionalConfiguration['SYS']['sitename'] = $localConfiguration['SYS']['sitename'] . ' • ' . ENVIRONMENT;

	ArrayUtility::mergeRecursiveWithOverrule( $GLOBALS['TYPO3_CONF_VARS'], $additionalConfiguration );
}

if ( file_exists( dirname( __FILE__ ) . '/CustomUserfunctions.php' ) ) {
	include_once dirname( __FILE__ ) . '/CustomUserfunctions.php';
}
