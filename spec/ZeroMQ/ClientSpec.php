<?php

namespace spec\ZeroMQ;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ZeroMQ\Client');
    }

	function it_should_create_a_zmq_context()
	{
		$this->createContext()->shouldHaveType('ZMQContext');
	}
}
