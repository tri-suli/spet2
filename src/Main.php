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

    public static function getOutlier(array $numbers): int|bool
    {
        $oddNumbers = array_values(array_filter($numbers, function (int $number) {
            return $number % 2 === 1;
        }));

        $evenNumbers = array_values(array_filter($numbers, function (int $number) {
            return $number % 2 === 0;
        }));

        if (count($oddNumbers) === 1) {
            return $oddNumbers[0];
        }

        if (count($evenNumbers) === 1) {
            return $evenNumbers[0];
        }

        return false;
    }

    public static function findNeedle(array $haystack, string $needle): int
    {
        foreach ($haystack as $index => $word) {
            if ($needle === $word) {
                return $index;
            }
        }

        return -1;
    }

    public static function blueOcean(array $numbers, array $operators): array
    {
        return array_values(array_filter($numbers, function (int $number) use ($operators) {
            return !in_array($number, $operators);
        }));
    }
}
