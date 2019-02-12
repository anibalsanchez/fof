<?php
/**
 * @package     FOF
 * @copyright   Copyright (c)2010-2019 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL version 3 or later
 */

namespace  FOF40\Model\DataModel\Filter\Exception;

use Exception;
use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

class NoDatabaseObject extends \InvalidArgumentException
{
	public function __construct( $fieldType, $code = 500, Exception $previous = null )
	{
		$message = Text::sprintf('LIB_FOF40_MODEL_ERR_FILTER_NODBOBJECT', $fieldType);

		parent::__construct( $message, $code, $previous );
	}

}
