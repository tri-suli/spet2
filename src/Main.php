<?php 

declare(strict_types=1);

namespace Spe\Test2;

final class Main
{
    public static function narcissistic(int $digit): bool
    {
        $isNarcissistic = false;
        $digit = (string) $digit;
        $totalDigit = strlen($digit);

        $result = 0;
        for ($i = 0; $i < $totalDigit; $i++) {
            $result += pow(intval($digit[$i]), $totalDigit);
        }

        if (intval($result) === intval($digit)) {
            $isNarcissistic = true;
        }

        return $isNarcissistic;
    }
}
