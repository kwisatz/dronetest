<?php

namespace spec\ZeroMQ;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ServerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ZeroMQ\Server');
    }

	function it_should_create_a_new_zeromq_context()
	{
		$this->createContext()->shouldHaveType('ZMQContext');
	}

	// Cannot do this, since it is blocking
	/*function it_should_create_a_zeromq_server_instance()
	{
		$this->createServer()->shouldHaveType('ZMQSocket');
	}
	 */

	/*
	function it_should_be_able_to_receive_messages()
	{
		$this->receiveMsg()->shouldReturn('Hello');
	}
	 */

}
