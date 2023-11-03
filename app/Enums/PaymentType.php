<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PaymentType extends Enum
{
    const UNPAID = 0;
    const PAID = 1;
    const OVERDUE = 2;

    /**
     * Get the description for an enum value.
     *
     * @param mixed $value
     * @return string
     */
    public static function getDescription($value): string
    {
        return match ($value) {
            self::UNPAID => 'Chưa đóng',
            self::PAID => 'Đã đóng',
            self::OVERDUE => 'Quá hạn',
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
