<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static User()
 * @method static static Admin()
 */
final class UserRole extends Enum
{
    const User =   0;
    const Admin =   1;
}
