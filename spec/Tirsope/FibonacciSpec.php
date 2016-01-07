<?php

namespace spec\Tirsope;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibonacciSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tirsope\Fibonacci');
    }
}
