<?php
/**
 * @package     FOF
 * @copyright   Copyright (c)2010-2019 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL version 3 or later
 */

namespace  FOF40\Controller\Exception;

use Exception;
use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

/**
 * Exception thrown when the provided Model is locked for writing by another user
 */
class LockedRecord extends \RuntimeException
{
	public function __construct($message = "", $code = 403, Exception $previous = null)
	{
		if (empty($message))
		{
			$message = Text::_('LIB_FOF40_CONTROLLER_ERR_LOCKED');
		}

		parent::__construct($message, $code, $previous);
	}
}
