<?php
/**
 * @package     FOF
 * @copyright   Copyright (c)2010-2019 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL version 3 or later
 */

namespace  FOF40\View\Exception;

use Exception;

defined('_JEXEC') or die;

/**
 * Exception thrown when we are trying to operate on an empty section stack
 */
class EmptyStack extends \RuntimeException
{
	public function __construct($message = "", $code = 500, Exception $previous = null)
	{
		$message = \JText::_('LIB_FOF40_VIEW_EMPTYSECTIONSTACK');

		parent::__construct($message, $code, $previous);
	}
}
