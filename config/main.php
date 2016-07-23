<?php
return [

    'components' =>
    [
        'v3toysApi' => 
        [
            //'class' => 'v3toys\yii2\api\Api'
            'class' => 'v3toys\skeeks\V3toysApi'
        ],

        'v3toysSettings' =>
        [
            'class' => 'v3toys\skeeks\components\V3toysSettings'
        ],

        'i18n' => 
        [
            'translations' =>
            [
                'v3toys/skeeks' => 
                [
                    'class'             => 'yii\i18n\PhpMessageSource',
                    'basePath'          => '@v3toys/skeeks/messages',
                    'fileMap' => [
                        'v3toys/skeeks' => 'main.php',
                    ],
                ]
            ]
        ],

        'urlManager' => [
            'rules' => [
                '~v3-<_a:(checkout|finish)>'          => 'v3toys/cart/<_a>',
                '~v3-order/<_a>'                      => 'v3toys/order/<_a>',
            ]
        ],
    ],
    
    'modules' =>
    [
        'v3toys' => 
        [
            'class'                 => 'v3toys\skeeks\V3toysModule',
        ]
    ]
];