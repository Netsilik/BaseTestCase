<?php
namespace Tests\Foo\Example;

/**
 * @copyright (c) 2010-2019 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

use App\Foo\Example;
use Netsilik\Testing\Helpers\FunctionOverwrites;
use Tests\BaseTestCase;

/**
 * Tests for class Example
 */
class StartSessionTest extends BaseTestCase
{
	public function setUp() : void
	{
		parent::setUp();

		// your code here
	}
	
	public function test_whenSessionStarted_thenTrueReturned()
	{
		FunctionOverwrites::setActive('session_start', true);
		
		$example = new Example(4);
		$example->startSession();
		
		$result = self::getInaccessibleProperty($example, '_sessionStarted');
		
		self::assertTrue($result);
		self::assertEquals(1, FunctionOverwrites::getCallCount('session_start'));
	}
	
	public function test_whenSessionNotStarted_thenWarningTriggeredAndFalseReturned()
	{
		FunctionOverwrites::setActive('session_start', false);
		
		$example = new Example(4);
		$example->startSession();
		
		$result = self::getInaccessibleProperty($example, '_sessionStarted');
		
		self::assertFalse($result);
		self::assertEquals(1, FunctionOverwrites::getCallCount('session_start'));
		self::assertErrorTriggered(E_USER_WARNING, 'Session initialization failed');
	}
	

	public function tearDown() : void
	{
		// your code here

		parent::tearDown();
	}
}
