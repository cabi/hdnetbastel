<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'           => 'hdnet_bastel',
    'title'        => 'Bastel',
    'description'  => [
        'de' => 'Modul um an OXID herum zu basteln.',
        'en' => 'Module for tweaking OXID.',
    ],
    'thumbnail'    => 'logo.jpg',
    'version'      => '0.0.1',

    'author'       => 'HDNET',
    'url'          => 'https://www.hdnet.de',
    'email'        => 'info@hdnet.de',
    'extend'       => [
//        \OxidEsales\Eshop\Core\ViewConfig::class                              => \OxidEsales\PayPalModule\Core\ViewConfig::class,
    ],
    'controllers' => [
        'bastelwastel' => \HDNET\Bastel\Controller\BastelController::class
    ],
    'events'       => [],
    'templates' => [
        'bastel_index.tpl' => 'hdnet/bastel/views/tpl/bastel/index.tpl'
        ],
    'blocks' => [
        [
            'template' => 'widget/header/servicebox.tpl',
            'block' => 'widget_header_servicebox_items',
            'file' => 'views/blocks/servicebox.tpl'

        ]

    ],
    'settings' => [
        ['group' => 'bastelgruppe', 'name' => 'greetingsStranger',        'type' => 'str',    'value' => '']
    ]
];
