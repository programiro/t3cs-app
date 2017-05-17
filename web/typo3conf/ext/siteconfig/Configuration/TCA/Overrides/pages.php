<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Add TypoScript Configuration to "Include Page TSConfig (from extensions):"
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'siteconfig',
    'Configuration/TsConfig/page.t3s',
    'TYPO3 Site Configuration • Page TSConfig'
);