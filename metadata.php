<?php

/**
 * Metadata file for module
 *
 * @file          metadata.php
 * @link          https://www.consentmanager.net
 * @copyright (C) ConsentManager
 * @package       modules
 * @addtogroup    modules
 */

use ConsentManager\ConsentManager\Application\Controller\Admin\MainController;
use ConsentManager\ConsentManager\Core\Module;

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'cmconsentmanager',
    'title' => 'consentmanager',
    'description' => [
        'de' => '<ol><li>Log dich in deinem consentmanager Account ein und kopiere deine CMP code ID</li>
                <li>Füge die CMP code ID in den OXID consentmanager Plugin Einstellungen ein</li>
                <li>Wähle deinem Blockierungsmodus: automatisch / halbautomatisch</li>
                <li>Speicher die Plugineinstellungen & fertig</li></ol>
                <p>Du hast noch keinen consentmanager Account?</p>
                <p>Hole dir hier deinen kostenlosen Account: <a href="https://app.consentmanager.net/register.php?setlang=1">https://app.consentmanager.net/register.php?setlang=1</a></p>',
        'en' => '<ol><li>Login to your consentmanager account and get your CMP code ID</li>
                <li>Enter the CMP code ID in the OXID consentmanager plugin settings</li>
                <li>Choose your blocking mode: automatic / semi-automatic</li>
                <li>Save plugin settings & enjoy</li></ol>
                <p>You do not have a consentmanager account yet?</p>
                <p>Register here for free: <a href="https://app.consentmanager.net/register.php">https://app.consentmanager.net/register.php</a></p>',
    ],
    'thumbnail' => 'logo.png',
    'version' => '2.0.0',
    'author' => 'ConsentManager, D3 Data Development (d3data.de)',
    'email' => 'info@consentmanager.net',
    'url' => 'https://www.consentmanager.net',
    'blocks' => [
        [
            'template' => 'layout/base.tpl',
            'block' => 'head_meta_robots',
            'file' => 'views/smarty/blocks/head_meta_robots.tpl',
        ],
        [
            'template' => 'layout/base.tpl',
            'block' => 'theme_svg_icons',
            'file' => 'views/smarty/blocks/theme_svg_icons.tpl',
        ],
    ],
    'templates'   => [
        '@cmconsentmanager/admin/cmconsentmanager_main.tpl' => 'views/smarty/admin/consentmanager_main.tpl',
    ],
    'controllers' => [
        'cmconsentmanager_main' => MainController::class,
    ],
    'events'      => [
        'onActivate'   => Module::class . '::onActivate',
        'onDeactivate' => Module::class . '::onDeactivate',
    ]
];
