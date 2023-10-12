<?php

namespace Tests;

use Spe\Test2\Main;
use PHPUnit\Framework\TestCase;

class NeedleInHaystackTest extends TestCase
{
    public function test_can_found_the_index_of_the_given_needle_string(): void
    {
        $inputs = ['red', 'blue', 'yellow', 'black', 'grey'];

        $index = Main::findNeedle($inputs, 'blue');

        $this->assertEquals(1, $index);
    }

    public function test_cannot_found_the_index_of_the_given_needle_string(): void
    {
        $inputs = ['red', 'blue', 'yellow', 'black', 'grey'];

        $index = Main::findNeedle($inputs, 'cyan');

        $this->assertEquals(-1, $index);
    }
}
