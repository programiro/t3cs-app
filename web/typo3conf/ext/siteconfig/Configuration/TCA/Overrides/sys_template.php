<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Add TypoScript Configuration to "Include static (from extensions):"
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'siteconfig',
    'Configuration/TypoScript',
    'TYPO3 Site Configuration • TypoScript'
);