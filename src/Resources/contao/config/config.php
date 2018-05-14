<?php

/**
<<<<<<< HEAD
 * ContaoPrivacy for Contao Open Source CMS
 *
 * @copyright   Friends of Contao 2018
 * @author      Mathias Arzberger <https://pdir.de>
 * @author      Fritz Michael Gschwantner <https://github.com/fritzmg>
 * @package     ContaoPrivacy
 * @license     LGPL-3.0+
 * @see         https://github.com/friends-of-contao/contao-privacy
 */

$assetsDir = 'bundles/foccontaoprivacy';

/*
 * Backend modules
 */

array_insert($GLOBALS['BE_MOD']['foc'], 0, array
(
    'focPrivacyOverview' => array
    (
        'callback' => 'Foc\ContaoPrivacyBundle\Module\PrivacyOverview',
        'icon' => $assetsDir . '/img/icon.png',
        // 'javascript'        =>  $assetsDir . '/js/backend.min.js',
        'stylesheet' => $assetsDir . '/css/privacyOverview.css'
    ),
));

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['analyticsOptOut'] = 'Brkwsky\PrivacyConsentBundle\Modules\AnalyticsOptOut';