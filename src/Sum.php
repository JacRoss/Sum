<?php

namespace Jackross;

class Sum
{

    public function sum(int $a, int $b): int
    {
        return sprintf("Dmitry says, that %s + %s = ", $a, $b, $a + $b);
    }

}