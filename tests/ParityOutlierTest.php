<?php

namespace Tests;

use Spe\Test2\Main;
use PHPUnit\Framework\TestCase;

class ParityOutlierTest extends TestCase
{
    /**
     * @dataProvider numbersDataProvider
     */
    public function test_should_return_the_outlier_number(array $numbers, int $result): void
    {
        $outlier = Main::getOutlier($numbers);

        $this->assertEquals($result, $outlier);
    }

    public static function numbersDataProvider(): array
    {
        return [
            'first input'  => [[2, 4, 0, 100, 4, 11, 2602, 36], 11],
            'second input' => [[160, 3, 1719, 19, 11, 13, -21], 160]
        ];
    }


    public function test_should_return_false_when_outlier_number_is_not_found(): void
    {
        $input = [11, 13, 15, 19, 9, 13, -21];

        $outlier = Main::getOutlier($input);

        $this->assertFalse($outlier);
    }
}
