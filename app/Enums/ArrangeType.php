<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ArrangeType extends Enum
{
    const DEFAULT= 0;
    const BIGGEST_DEBT = 1;
    const LONGEST_DEBT = 2;

    /**
     * Get the description for an enum value.
     *
     * @param mixed $value
     * @return string
     */
    public static function getDescription($value): string
    {
        return match ($value) {
            self::DEFAULT => 'Sắp xếp mặc định',
            self::BIGGEST_DEBT => 'Nợ nhiều nhất',
            self::LONGEST_DEBT => 'Nợ lâu nhất',
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
