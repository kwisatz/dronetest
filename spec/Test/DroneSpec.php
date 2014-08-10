<?php

namespace spec\Test;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DroneSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Test\Drone');
    }

	function it_says_hello_world()
	{
		$this->sayHello()->shouldReturn('Hello World!');
	}
}
