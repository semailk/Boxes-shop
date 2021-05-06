<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static New()
 * @method static static Bestseller()
 * @method static static Sale()
 */
final class ProductTag extends Enum
{
    const New = 'new';
    const Bestseller = 'bestseller';
    const Sale = 'sale';
}
