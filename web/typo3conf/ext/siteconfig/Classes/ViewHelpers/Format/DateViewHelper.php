<?php
namespace Medienagenten\Siteconfig\ViewHelpers\Format;

/**
 * Formats a \DateTime object.
 *
 * = Examples =
 *
 * {namespace ma=Medienagenten\Siteconfig\ViewHelpers}
 *
 * Default Date
 * {dateObject -> ma:format.date()}
 *
 * With Type Config
 * {dateObject -> ma:format.date(type:'medium')}
 *
 * <ma:format.date type="long">{dateObject}</ma:format.date>
 *
 *
 * = Required TypoScript-Configuration =
 *
 * config {
 *    format {
 *        date.short  = %d.%m.%Y
 *        date.medium = %d. %b %Y
 *        date.long   = %A, %d. %b %Y
 *        time        = %H:%M
 *    }
 * }
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class DateViewHelper
 *
 * @package Medienagenten\Siteconfig\ViewHelpers\Format
 * @api
 */
class DateViewHelper extends AbstractViewHelper
{

    /**
     * @var bool
     */
    protected $escapingInterceptorEnabled = false;

    /**
     * Render the supplied DateTime object as a formatted date.
     *
     * @param mixed $date either a DateTime object or a string that is accepted by DateTime constructor
     * @param string $type One of short, medium, long
     * @throws \TYPO3\CMS\Fluid\Core\ViewHelper\Exception
     * @return string Formatted date
     * @api
     */
    public function render($date = null, $type = null)
    {

        if (empty($type)) {
            $type = 'short';
        }


        $format = $GLOBALS['TSFE']->config['config']['format.']['date.'][$type];

        if (empty($format)) {
            return;
        }

        if ($date === null) {
            $date = $this->renderChildren();

            if ($date === null) {
                return '';
            }
        }

        if (!$date instanceof \DateTime) {
            try {
                if (is_integer($date)) {
                    $date = new \DateTime('@' . $date);
                } else {
                    $date = new \DateTime($date);
                }
                $date->setTimezone(new \DateTimeZone(date_default_timezone_get()));
            } catch (\Exception $exception) {
                throw new \TYPO3\CMS\Fluid\Core\ViewHelper\Exception(
                    '"' . $date . '" could not be parsed by \DateTime constructor.', 1241722579
                );
            }
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $date->format('U'));
        } else {
            return $date->format($format);
        }
    }
}
