<?php

namespace Tests;

use Spe\Test2\Main;
use PHPUnit\Framework\TestCase;

class NarcissisticNumberTest extends TestCase
{
    public function test_chech_if_the_given_number_is_not_narcisstic(): void
    {
        $input = 111;

        $result = Main::narcissistic($input);

        $this->assertFalse($result);
    }

    /**
     * @dataProvider digitsDataProvider
     */
    public function test_chech_if_the_given_number_is_narcisstic(int $input): void
    {
        $result = Main::narcissistic($input);

        $this->assertTrue($result);
    }

    public static function digitsDataProvider(): array
    {
        return [
            'first input'  => [1634],
            'second input' => [153]
        ];
    }
}
