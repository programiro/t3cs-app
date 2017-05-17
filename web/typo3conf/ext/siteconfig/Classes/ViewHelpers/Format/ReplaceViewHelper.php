<?php
namespace Medienagenten\Siteconfig\ViewHelpers\Format;

/****
 * Applies trim() escaping to a value
 * Strip whitespace (or other characters) from the beginning and end of a string
 *
 * @see http://php.net/str-replace
 *
 *
 *  = Examples =
 *
 * {namespace ma=Medienagenten\Siteconfig\ViewHelpers}
 *
 * <ma:format.replace>{text}</ma:format.strReplace>
 * <ma:format.replace option="" />
 * {text -> ma:format.replace(search: '')}
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\SingletonInterface;

/**
 * Class ReplaceViewHelper
 *
 * @package Medienagenten\Siteconfig\ViewHelpers\Format
 * @api
 */
class ReplaceViewHelper extends AbstractViewHelper implements SingletonInterface
{

    /**
     * Disable the escaping interceptor because otherwise the child nodes would be escaped before this view helper
     * can decode the text's entities.
     *
     * @var bool
     */
    protected $escapingInterceptorEnabled = false;

    /**
     * Replace all occurrences of the search string with the replacement string using str_replace() function.
     *
     * @param string $value the string being searched and replaced on
     * @param string $searchString the value being searched for
     * @param string $replaceString the replacement value that replaces found search values
     * @return string
     */
    public function render($value = null, $searchString = '', $replaceString = '')
    {
        if ($value === null) {
            $value = $this->renderChildren();
        }
        if (!is_string($value)) {
            return $value;
        }

        return str_replace($searchString, $replaceString, $value);
    }
}