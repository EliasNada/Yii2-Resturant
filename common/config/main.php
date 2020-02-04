<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
//            'class' => 'yii\caching\MemCache',
//            'servers' => [
//                [
//                    'host' => 'server1',
//                    'port' => 11211,
//                    'weight' => 60,
//                ],
//                [
//                    'host' => 'server2',
//                    'port' => 11211,
//                    'weight' => 40,
//                ],
//            ],
        ],
    ],
];
