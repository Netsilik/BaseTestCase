<?php
namespace Tests;

/**
 * @copyright (c) 2010-2019 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

use Netsilik\Testing\BaseTestCase AS NetsilikBaseTestCase;


/**
 * Base test case
 */
abstract class BaseTestCase extends NetsilikBaseTestCase
{
	/**
	 * {@inheritDoc}
	 */
	public function __construct($name = null, array $data = [], $dataName = '')
	{
		parent::__construct($name, $data, $dataName);
		
		$this->_convertNoticesToExceptions  = false;
		$this->_convertWarningsToExceptions = false;
		$this->_convertErrorsToExceptions   = true;
	}
}
