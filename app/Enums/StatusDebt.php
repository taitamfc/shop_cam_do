<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusDebt extends Enum
{
    const ALL = 0;
    const NORMAL = 1;
    const BAD_DEBT = 2;

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
            self::NORMAL => 'Bình thường',
            self::BAD_DEBT => 'Nợ xấu',
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
