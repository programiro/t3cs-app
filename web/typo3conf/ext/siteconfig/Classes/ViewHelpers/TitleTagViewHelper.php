<?php

namespace Medienagenten\Siteconfig\ViewHelpers;

/**
 * ViewHelper to render the page title
 *
 * # Example: Basic Example
 * # Description: Render the content of a variable as page title
 *
 * {namespace ma=Medienagenten\Siteconfig\ViewHelpers}
 *
 * <code>
 *    <ma:titleTag>{data.field}</ma:titleTag>
 * </code>
 *
 * <output>
 *    <title>TYPO3 is awesome</title>
 * </output>
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class TitleTagViewHelper
 *
 * @package Medienagenten\Siteconfig\ViewHelpers
 * @api
 */
class TitleTagViewHelper extends AbstractViewHelper
{

    /**
     * Override the title tag
     *
     * @return void
     */
    public function render()
    {
        $content = trim($this->renderChildren());

        if (!empty($content)) {
            $GLOBALS['TSFE']->altPageTitle = $content;
            $GLOBALS['TSFE']->indexedDocTitle = $content;
        }
    }
}
