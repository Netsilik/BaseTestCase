<?php

/**
 * @copyright (c) 2010-2019 Netsilik (http://netsilik.nl)
 * @license       MIT
 */

namespace Example\App\Foo
{
	use Netsilik\Testing\Helpers\FunctionOverwrites;
	
	function session_start(array $options = []) : bool
	{
		FunctionOverwrites::incrementCallCount(__FUNCTION__);
		
		if (FunctionOverwrites::isActive(__FUNCTION__)) {
			return FunctionOverwrites::shiftNextReturnValue(__FUNCTION__);
		}
		
		return \session_start($options);
	}
}
