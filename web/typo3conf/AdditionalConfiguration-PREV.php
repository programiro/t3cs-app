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
    ],
    'SYS' => [
      'caching' => [
        'cacheConfigurations' => [
          'extbase_object' => [
            'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend'
          ]
        ]
      ]
    ]
];

ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TYPO3_CONF_VARS'], $additionalConfiguration);