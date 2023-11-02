<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TimeEnum extends Enum
{
    const ALL = 0;
    const YESTERDAY = 1;
    const TODAY = 2;
    const TOMORROW = 3;

    /**
     * Get the description for an enum value.
     *
     * @param mixed $value
     * @return string
     */
    public static function getDescription($value): string
    {
        return match ($value) {
            self::ALL => 'Tất cả',
            self::YESTERDAY => 'Hôm qua',
            self::TODAY => 'Hôm nay',
            self::TOMORROW => 'Ngày mai',
            default => parent::getDescription($value),
        };
    }

    public static function asFlippedArray(){
        return array_flip(self::asSelectArray());
    }
    public static function asLowerFlippedArray(){
        return array_change_key_case(self::asArray(), CASE_LOWER);
    }
}
