<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static LiqPay()
 * @method static static PayPal()
 * @method static static CoinBase()
 */
final class OrderPayTypes extends Enum
{
    const LiqPay = 0;
    const PayPal = 1;
    const CoinBase = 2;
}
