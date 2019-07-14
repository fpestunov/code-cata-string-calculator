<?php

namespace spec;

use StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_translates_an_empty_string_into_zero()
    {
    	// shouldReturn, shouldBe, shouldEqual
    	// for math better use Equal
        $this->add('')->shouldEqual(0);
    }

}
