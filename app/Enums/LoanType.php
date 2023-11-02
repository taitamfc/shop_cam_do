<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class LoanType extends Enum
{
    const PAWN = 0;
    const INSTALLMENT = 1;

    /**
     * Get the description for an enum value.
     *
     * @param mixed $value
     * @return string
     */
    public static function getDescription($value): string
    {
        return match ($value) {
            self::PAWN => 'Cầm đồ',
            self::INSTALLMENT => 'Trả góp',
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
