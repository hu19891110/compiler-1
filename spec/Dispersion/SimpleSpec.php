<?php

namespace spec\EcomDev\Compiler\Dispersion;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleSpec extends ObjectBehavior
{
    function it_returns_deafault_dispersion()
    {
        $this->calculate('something')->shouldReturn('default');
        $this->calculate('obc')->shouldReturn('default');
        $this->calculate('ob')->shouldReturn('default');
    }

    function it_is_possible_to_use_custom_value()
    {
        $this->beConstructedWith('custom_name');
        $this->calculate('something')->shouldReturn('custom_name');
        $this->calculate('abc')->shouldReturn('custom_name');
        $this->calculate('ob')->shouldReturn('custom_name');
        $this->calculate('o')->shouldReturn('custom_name');
    }
}
