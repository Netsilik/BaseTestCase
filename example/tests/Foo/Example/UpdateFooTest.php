<?php
namespace Tests\Foo\Example;

/**
 * @copyright (c) 2010-2019 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

use App\Foo\Example;
use InvalidArgumentException;
use Netsilik\Testing\BaseTestCase;

/**
 * Tests for class Example
 */
class UpdateFooTest extends BaseTestCase
{
	public function setUp() : void
	{
		parent::setUp();

		// your code here
	}
	
	public function test_whenValidValueGiven_thenFooPropertySet()
	{
		$example = new Example(8);
		
		self::callInaccessibleMethod($example, 'updateFoo', 'abc');
		$result = self::getInaccessibleProperty($example, '_foo');
		
		self::assertEquals('abc', $result);
	}
	
	public function test_whenNonValidValueGiven_thenFooPropertySet()
	{
		$example = new Example(4);
		
		self::expectException(InvalidArgumentException::class);
		self::expectExceptionMessage('Max length for foo exceeded');
		
		self::callInaccessibleMethod($example, 'updateFoo', 'abcabc');
	}

	public function tearDown() : void
	{
		// your code here

		parent::tearDown();
	}
}
