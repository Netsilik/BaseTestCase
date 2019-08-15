<?php
namespace Example\App\Foo;

use InvalidArgumentException;


/**
 * Class Example
 *
 * @package App\Foo
 */
class Example
{
	/**
	 * @var bool $_sessionStarted
	 */
	private $_sessionStarted;
	
	/**
	 * @var string $_foo
	 */
	private $_foo;
	
	/**
	 * @var int $maxFooLength
	 */
	protected $_maxFooLength;
	
	/**
	 * Constructor
	 */
	public function __construct(int $maxFooLength)
	{
		$this->_maxFooLength = $maxFooLength;
	}
	
	/**
	 * @param int $foo
	 *
	 * @return void
	 * @throws \InvalidArgumentException
	 */
	protected function _updateFoo(string $foo) : void
	{
		if (strlen($foo) > $this->_maxFooLength) {
			throw new InvalidArgumentException('Max length for foo exceeded');
		}
		
		$this->_foo = $foo;
	}
	
	/**
	 * @return bool
	 */
	public function startSession() : void
	{
		if (!session_start()) {
			trigger_error('Session initialization failed', E_USER_WARNING);
			
			$this->_sessionStarted = false;
			
			return;
		}
		
		$this->_sessionStarted = true;
	}
}
