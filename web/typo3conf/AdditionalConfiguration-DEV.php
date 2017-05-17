<?php

use TYPO3\CMS\Core\Utility\ArrayUtility;

$additionalConfiguration = [
    'BE'   => [
        'debug' => true
    ],
    'DB'   => [
        'Connections' => [
            'Default' => [
                'dbname' => 'typo3',
                'host' => 'mysql',
                'password' => 'dev',
                'user' => 'dev',
            ],
        ],
	],
	'FE'   => [
		'debug' => true,
		'disableNoCacheParameter' => false
	],
    'GFX'  => [
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/'
    ],
	'MAIL' => [
		'transport' => 'smtp',
		'transport_smtp_server' => 'mail:1025',
	],
	'SYS'  => [
		'devIPmask'            => '*',
		'displayErrors'        => true,
		'enableDeprecationLog' => 'file',
		'sqlDebug'             => true,
		'systemLogLevel'       => '2',
		'clearCacheSystem'     => true
	]
];

ArrayUtility::mergeRecursiveWithOverrule( $GLOBALS['TYPO3_CONF_VARS'], $additionalConfiguration );
