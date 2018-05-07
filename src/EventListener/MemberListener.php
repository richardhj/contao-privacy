<?php

/**
 * @copyright   Christian Barkowsky 2018 <https://brkwsky.de>
 * @author      Christian Barkowsky <https://brkwsky.de>
 * @package     PrivacyConsentBundle
 * @license     LGPL-3.0+
 * @see         https://github.com/christianbarkowsky/contao-privacyconsent-bundle
 */

namespace Brkwsky\PrivacyConsentBundle\EventListener;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Contao\CoreBundle\Framework\ContaoFrameworkInterface;

/**
 * Class MemberListener
 * @package Brkwsky\PrivacyConsentBundle\EventListener
 */
class MemberListener
{

    /**
     * @var ContaoFrameworkInterface
     */
    private $framework;

    /**
     * @var ScopeMatcher
     */
    private $scopeMatcher;

    /**
     * MemberListener constructor.
     */
    public function __construct(ContaoFrameworkInterface $framework, ScopeMatcher $scopeMatcher)
    {
        $this->framework = $framework;
        $this->scopeMatcher = $scopeMatcher;
    }

    /**
     * On load callback
     */
    public function onLoad()
    {
        if (TL_MODE == 'FE') {
            /* @var PageModel $objPage */
            global $objPage;

            $GLOBALS['TL_LANG']['tl_member']['privacyConsent'] = $GLOBALS['TL_LANG']['privacyConsent'];
        }
    }
}
