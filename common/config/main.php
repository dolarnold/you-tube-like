<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'name'=>'zeddsTube',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'en-Us',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
