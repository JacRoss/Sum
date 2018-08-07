<?php

namespace Jackross;

class Math
{
    public static function saySum(int $a, int $b): string
    {
        return sprintf("Dmitry says, that %s + %s = %s", $a, $b, $a + $b);
    }
}