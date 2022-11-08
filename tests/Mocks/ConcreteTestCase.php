<?php
namespace Tests\Mocks;

/**
 * @copyright (c) 2010-2019 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

use Netsilik\Testing\BaseTestCase;


/**
 * Class ConcreteTestCase
 */
class ConcreteTestCase extends BaseTestCase
{
	/**
	 * @param string $errorMessage
	 * @param int    $errorType One of E_USER_NOTICE | E_USER_WARNING | E_USER_ERROR
	 */
	public function triggerError(string $errorMessage, int $errorType)
	{
		trigger_error($errorMessage, $errorType);
	}
	
	/**
	 * @param bool $value
	 *
	 * @return \Tests\Mocks\ConcreteTestCase
	 */
	public function setConvertNoticesToExceptions(bool $value) : self
	{
		$this->_convertNoticesToExceptions = $value;
		
		return $this;
	}
	
	/**
	 * @param bool $value
	 *
	 * @return \Tests\Mocks\ConcreteTestCase
	 */
	public function setConvertWarningsToExceptions(bool $value) : self
	{
		$this->_convertWarningsToExceptions = $value;
		
		return $this;
	}
	
	/**
	 * @param bool $value
	 *
	 * @return \Tests\Mocks\ConcreteTestCase
	 */
	public function setConvertErrorsToExceptions(bool $value) : self
	{
		$this->_convertErrorsToExceptions = $value;
		
		return $this;
	}
}
