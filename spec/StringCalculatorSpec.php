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

    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }

    function it_finds_the_sum_of_two_number()
    {
        $this->add('1,2')->shouldEqual(3);
    }

    function it_finds_the_sum_of_any_amount_numbers()
    {
        $this->add('1,2,3,4,5')->shouldEqual(15);
    }

    function it_disallows_negative_numbers()
    {
        $this->shouldThrow('InvalidArgumentException')->duringAdd('1,-2,3');
    }

    function it_ignores_any_number_that_is_one_thousand_or_greater()
    {
        $this->add('1,2,3,1001')->shouldEqual(6);
    }

}
