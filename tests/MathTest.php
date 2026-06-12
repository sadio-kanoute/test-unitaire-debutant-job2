<?php

namespace App\Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAddition(): void
    {
        $math = new Math();

        $this->assertEquals(5, $math->addition(2, 3));
    }
}
