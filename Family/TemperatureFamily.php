<?php
namespace Oro\Bundle\MeasureBundle\Family;

/**
 * Temperature measures constants
 *
 * @author    Romain Monceau <romain@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 *
 */
class TemperatureFamily extends AbstractFamily
{

    /**
     * Family measure name
     * @staticvar string
     */
    const FAMILY = 'Temperature';

    /**
     * @staticvar string
     */
    const CELCIUS    = 'CELCIUS';

    /**
     * @staticvar string
     */
    const FAHRENHEIT = 'FAHRENHEIT';

    /**
     * @staticvar string
     */
    const KELVIN     = 'KELVIN';

    /**
     * @staticvar string
     */
    const RANKINE    = 'RANKINE';

    /**
     * @staticvar string
     */
    const REAUMUR    = 'REAUMUR';

}