<?php
/**
 * @package   FOF
 * @copyright Copyright (c)2010-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 2, or later
 */

namespace Fakeapp\Site\Model;

use FOF30\Model\DataModel;
use FOF30\Container\Container;

class Parents extends DataModel
{
    public function __construct(Container $container, array $config = array())
    {
        // I have to manually disable autoChecks, otherwise FOF will try to search for the form, raising
        // a fatal error
        $config['autoChecks'] = false;

        parent::__construct($container, $config);
    }
}
