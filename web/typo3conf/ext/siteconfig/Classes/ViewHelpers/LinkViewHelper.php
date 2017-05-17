<?php

namespace Medienagenten\Siteconfig\ViewHelpers;

/**
 * ViewHelper to render the page title
 *
 * # Example: Basic Example
 * # Description: Render the link wizard in fluid
 *
 * <code>
 *    {namespace ma=Medienagenten\Siteconfig\ViewHelpers}
 *    <a href="{ma:link(url: '{data.field}')}">Linktext</a>
 * </code>
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class LinkViewHelper
 *
 * @package Medienagenten\Siteconfig\ViewHelpers
 * @api
 */
class LinkViewHelper extends AbstractViewHelper
{

    /**
     * @param string $url
     * @return string
     */
    public function render($url)
    {
        /** @var $contentObject \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer */
        $contentObject = $GLOBALS['TSFE']->cObj;

        return $contentObject->getTypoLink_URL($url);
    }
}
