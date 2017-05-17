<?php

use TYPO3\CMS\Core\Utility\ArrayUtility;

/**
 * Database setup
 */
$additionalConfiguration = [
    'DB' => [
        'Connections' => [
            'Default' => [
                'dbname' => '',
                'host' => 'mysql5.agentenserver.com',
                'password' => '',
                'user' => '',
            ],
        ],
    ]
];

ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TYPO3_CONF_VARS'], $additionalConfiguration);