<?php

namespace spec\Kata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DisplaySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kata\Display');
    }

    function it_should_have_a_property_for_each_number()
    {
        $this->shouldHaveConstant('NUMBER_1');
        $this->shouldHaveConstant('NUMBER_2');
        $this->shouldHaveConstant('NUMBER_3');
        $this->shouldHaveConstant('NUMBER_4');
        $this->shouldHaveConstant('NUMBER_5');
        $this->shouldHaveConstant('NUMBER_6');
        $this->shouldHaveConstant('NUMBER_7');
        $this->shouldHaveConstant('NUMBER_8');
        $this->shouldHaveConstant('NUMBER_9');
        $this->shouldHaveConstant('NUMBER_0');
    }

    function it_should_have_a_method_for_creating_one()
    {
        $this->drawDigit(1)->shouldReturn([['    '], ['   |'], ['    '], ['   |'], ['    ']]);
        $this->drawDigit(2)->shouldReturn([[' -- '], ['   |'], [' -- '], ['|    '], [' -- ']]);
    }

    function it_should_draw_a_line()
    {
        $this->drawI()->shouldReturn([' -- ']);
    }

    function it_should_draw_a_blank_line()
    {
        $this->drawN()->shouldReturn(['    ']);
    }

    function it_should_draw_a_both_line()
    {
        $this->drawB()->shouldReturn(['|  |']);
    }

    function it_should_draw_a_right_line()
    {
        $this->drawR()->shouldReturn(['   |']);
    }

    function it_should_draw_a_left_line()
    {
        $this->drawL()->shouldReturn(['|   ']);
    }

    function it_displays_something_if_you_call_draw()
    {
        $this->draw(1)->shouldReturn([['    '], ['   |'], ['    '], ['   |'], ['    ']]);
    }

    function getMatchers()
    {
        return [
            'haveConstant' => function($subject, $constantName) {
                $refl = new \ReflectionClass($subject);
                return false !== $refl->getConstant($constantName);
            }
        ];
    }
}
