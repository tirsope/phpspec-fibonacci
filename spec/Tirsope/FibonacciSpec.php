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

    function it_returns_zero_for_fibonacci_of_zero()
    {
        $this->fibonacci(0)->shouldReturn(0);
    }

    function it_returns_one_for_fibonacci_of_one()
    {
        $this->fibonacci(1)->shouldReturn(1);
    }

    function it_returns_one_for_fibonacci_of_two()
    {
        $this->fibonacci(2)->shouldReturn(1);
    }

    function it_returns_two_for_fibonacci_of_three()
    {
        $this->fibonacci(3)->shouldReturn(2);
    }

    function it_returns_three_for_fibonacci_of_four()
    {
        $this->fibonacci(4)->shouldReturn(3);
    }

    function it_returns_144_for_fibonacci_of_twelve()
    {
        $this->fibonacci(12)->shouldReturn(144);
    }
}
