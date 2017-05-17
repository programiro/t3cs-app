<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = [
    '_DEFAULT' => [
        'init' => [
            'appendMissingSlash' => 'ifNotFile,redirect[301]',
            'doNotRawUrlEncodeParameterNames' => true,
            'enableAllUnicodeLetters' => true,
            'enableCHashCache' => true,
            'enableUrlDecodeCache' => true,
            'enableUrlEncodeCache' => true,
            'postVarSet_failureMode' => '',
            'emptyUrlReturnValue' => '/',
        ],

        'pagePath' => [
            'type' => 'user',
            'userFunc' => 'Tx\\Realurl\\UriGeneratorAndResolver->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'rootpage_id' => '1',
            'disablePathCache' => 1,
            'excludePageIds' => null,
            'expireDays' => 7,
        ],

        'fileName' => [
            'acceptHTMLsuffix' => 0,
            'defaultToHTMLsuffixOnPrev' => 0,

            'index' => [
                'rss.xml' => [
                    'keyValues' => [
                        'type' => '100',
                    ],
                ],

                'rss091.xml' => [
                    'keyValues' => [
                        'type' => '101',
                    ],
                ],

                'rdf.xml' => [
                    'keyValues' => [
                        'type' => '102',
                    ],
                ],

                'atom.xml' => [
                    'keyValues' => [
                        'type' => '103',
                    ],
                ],
            ],
        ],

        'preVars' => [
            '0' => [
                'GETvar' => 'L',
                'valueMap' => [
                    'de' => '0',
                    'en' => '1',
                ],
                'noMatch' => 'bypass',
            ],
            '1' => [
                'GETvar' => 'no_cache',
                'valueMap' => [
                    'nc' => '1',
                ],
                'noMatch' => 'bypass',
            ],
        ],

        'postVarSets' => [
            '_DEFAULT' => [
                'controller' => [
                    [
                        'GETvar' => 'tx_myextension[controller]',
                    ],
                    [
                        'GETvar' => 'tx_myextension[action]',
                    ],
                ],
                'user' => [
                    [
                        'GETvar' => 'tx_myextension[model]',
                        'lookUpTable' => [
                            'table' => 'fe_users',
                            'id_field' => 'uid',
                            'alias_field' => 'username',
                            'addWhereClause' => ' AND NOT deleted',
                            'useUniqueCache' => 1,
                            'useUniqueCache_conf' => [
                                'strtolower' => 1,
                                'spaceCharacter' => '-',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
