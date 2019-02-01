<?php
/**
 * @package     FOF
 * @copyright   Copyright (c)2010-2019 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL version 3 or later
 */

namespace  FOF40\Factory\Exception;

use Exception;
use RuntimeException;

defined('_JEXEC') or die;

class FormNotFound extends RuntimeException
{
	public function __construct( $formClass, $code = 500, Exception $previous = null )
	{
		$message = \JText::sprintf('LIB_FOF40_FORM_ERR_NOT_FOUND', $formClass);

		parent::__construct( $message, $code, $previous );
	}

}
