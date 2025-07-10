<?php

namespace App\Functions;

class Study
{
    public static function sum(int|float $a, int|float $b): int|float
    {
        return (is_int($a) && is_int($b))
            ? (int) ($a + $b)
            : (float) ($a + $b);
    }
}
