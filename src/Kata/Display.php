<?php

namespace Kata;

class Display
{
    const NUMBER_1 = 'NRNRN';
    const NUMBER_2 = 2;
    const NUMBER_3 = 3;
    const NUMBER_4 = 4;
    const NUMBER_5 = 5;
    const NUMBER_6 = 6;
    const NUMBER_7 = 7;
    const NUMBER_8 = 8;
    const NUMBER_9 = 9;
    const NUMBER_0 = 0;

    public function draw($digit)
    {
        return $this->drawDigit($digit);
    }

    public function drawDigit($digit)
    {
        $out = [];
        $config = str_split(self::NUMBER_1);
        foreach ($config as $part) {
            $method = 'draw'.$part;
            $out[] = $this->$method();
        }
        return $out;
    }

    public function drawB()
    {
        return ['|  |'];
    }

    public function drawN()
    {
        return ['    '];
    }

    public function drawR()
    {
        return ['   |'];
    }

    public function drawL()
    {
        return ['|   '];
    }

    public function drawI()
    {
        return [' -- '];
    }
}
