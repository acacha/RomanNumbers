<?php

namespace spec;

use RomanNumbers;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumbers::class);
    }

    function it_returns_I_if_1(){
        $this->convert(1)->shouldReturn('I');
    }

    function it_returns_II_if_2(){
        $this->convert(2)->shouldReturn('II');
    }

    function it_returns_III_if_3(){
        $this->convert(3)->shouldReturn('III');
    }

    function it_returns_V_if_5(){
        $this->convert(5)->shouldReturn('V');
    }

    function it_returns_VI_if_6(){
        $this->convert(6)->shouldReturn('VI');
    }

    function it_returns_VII_if_7(){
        $this->convert(7)->shouldReturn('VII');
    }

    function it_returns_VIII_if_8(){
        $this->convert(8)->shouldReturn('VIII');
    }

    function it_returns_IX_if_9(){
        $this->convert(9)->shouldReturn('IX');
    }

    function it_returns_X_if_10(){
        $this->convert(10)->shouldReturn('X');
    }

    function it_returns_VI_if_4(){
        $this->convert(4)->shouldReturn('IV');
    }

    function it_returns_XI_if_11(){
        $this->convert(11)->shouldReturn('XI');
    }

    function it_returns_XV_if_15(){
        $this->convert(15)->shouldReturn('XV');
    }

    function it_returns_MCMXCIX_if_1999(){
        $this->convert(1999)->shouldReturn('MCMXCIX');
    }
}
