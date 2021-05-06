<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static DeliveryMail()
 * @method static static PaymentViaPayPal()
 */
final class DeliveryOption extends Enum
{
    const DeliveryMail = 0;
    const PaymentViaPayPal = 1;
}
