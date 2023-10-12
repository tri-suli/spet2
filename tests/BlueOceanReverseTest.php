<?php

namespace Tests;

use Spe\Test2\Main;
use PHPUnit\Framework\TestCase;

class BlueOceanReverseTest extends TestCase
{
    /**
     * @dataProvider numbersDataProvider
     */
    public function test_should_extract_numbers_that_are_present_in_the_second_list(array $numbers, array $operators, array $expectedResult): void
    {
        $result = Main::blueOcean($numbers, $operators);

        $this->assertEquals($expectedResult, $result);
    }

    public static function numbersDataProvider(): array
    {
        return [
            '1 number is present in the second list' => [[1, 2, 3, 4, 6, 10], [1], [2, 3, 4, 6, 10]],
            '4 number is present in the second list' => [[1, 5, 5, 5, 5, 3], [5], [1, 3]],
            'no number is present in the second list' => [[1, 2, 3, 4, 5, 5, 5, 5, 6, 10], [], [1, 2, 3, 4, 5, 5, 5, 5, 6, 10]]
        ];
    }
}
