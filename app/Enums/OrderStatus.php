<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Created()
 * @method static static Cancelled()
 * @method static static Processing()
 * @method static static Delivering()
 * @method static static Done()
 */
final class OrderStatus extends Enum
{
    const Created = 0;
    const Cancelled = 1;
    const Processing = 2;
    const Delivering = 3;
    const Done = 4;
}
