<?php
namespace Medienagenten\Siteconfig\ViewHelpers\Format;

/****
 * Applies trim() escaping to a value
 * Strip whitespace (or other characters) from the beginning and end of a string
 *
 * @see http://php.net/trim
 *
 *
 *  = Examples =
 *
 * {namespace ma=Medienagenten\Siteconfig\ViewHelpers}
 *
 * <ma:format.trim>{text}</ma:format.trim>
 * <ma:format.trim character_mask=" \t\n\r\0\x0B" />
 * {text -> ma:format.trim(character_mask: ' \t\n\r\0\x0B')}
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\SingletonInterface;

/**
 * Class TrimViewHelper
 *
 * @package Medienagenten\Siteconfig\ViewHelpers\Format
 * @api
 */
class TrimViewHelper extends AbstractViewHelper implements SingletonInterface
{

    /**
     * Disable the escaping interceptor because otherwise the child nodes would be escaped before this view helper
     * can decode the text's entities.
     *
     * @var bool
     */
    protected $escapingInterceptorEnabled = false;

    /**
     * Strip whitespace (or other characters) from the beginning and end of a string using trim() function.
     *
     * @param null $value string to trim
     * @param null $character_mask all characters that you want to be stripped
     * @return string the trimmed string
     */
    public function render($value = null, $character_mask = null)
    {
        if ($value === null) {
            $value = $this->renderChildren();
        }
        if (!is_string($value)) {
            return $value;
        }

        return trim($value, $character_mask);
    }
}