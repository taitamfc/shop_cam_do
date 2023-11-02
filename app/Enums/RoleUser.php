<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class RoleUser extends Enum
{
    const STAFF = 0;
    const MANAGER = 1;
    const ADMIN = 2;


}
