<?php
return [
    'BE' => [
        'debug' => '',
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$CKQtMRZtVFHHBZUvVCsHmSDOGIP7S8/',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
                'port' => 3306,
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:3:{s:9:"loginLogo";s:67:"EXT:siteconfig/Resources/Public/Images/buero_medienagenten_logo.png";s:19:"loginHighlightColor";s:7:"#000000";s:20:"loginBackgroundImage";s:59:"EXT:siteconfig/Resources/Public/Images/background-login.png";}',
            'gridelements' => 'a:2:{s:20:"additionalStylesheet";s:0:"";s:19:"nestingInListModule";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rte_ckeditor' => 'a:0:{}',
            'rtehtmlarea' => 'a:8:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:20:"defaultConfiguration";s:120:"Minimal (Most features disabled. Administrator needs to enable them using TypoScript. For advanced administrators only.)";s:12:"enableImages";s:1:"0";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"0";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"forceCommandMode";s:1:"0";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'siteconfig' => 'a:0:{}',
        ],
    ],
    'FE' => [
        'debug' => '',
        'disableNoCacheParameter' => true,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => -1,
        'processor_enabled' => 1,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'INSTALL' => [],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => '',
        'enableDeprecationLog' => '',
        'encryptionKey' => 'a99fc7b67dffd8ad8d0e8480c0df78114d4a2ac80415dde6a67246a02371e0c298852345a2a02aae5d298ff43435756a',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'TYPO3 Gulp',
        'sqlDebug' => '',
        'systemLocale' => 'de_DE.UTF-8',
        'systemLogLevel' => '0',
    ],
];
