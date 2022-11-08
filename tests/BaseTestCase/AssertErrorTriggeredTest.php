<?php
namespace Tests\BaseTestCase;

/**
 * @copyright (c) 2010-2019 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

use PHPUnit\Framework\TestCase AS phpUnitTestCase;
use Tests\Mocks\ConcreteTestCase;


class AssertErrorTriggeredTest extends phpUnitTestCase
{
	public function test_whenFoo_thenBar()
	{
		$ctc = new ConcreteTestCase();
		$ctc->setConvertNoticesToExceptions(false)
			->setConvertWarningsToExceptions(false)
			->setConvertErrorsToExceptions(true);
		
		
		$ctc->triggerError('Example warning message', E_USER_WARNING);
		
		$result = ConcreteTestCase::assertErrorTriggered(E_USER_WARNING, 'Example warning message');
	}
}
