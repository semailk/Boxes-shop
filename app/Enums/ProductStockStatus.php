<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NotAvailable()
 * @method static static Available()
 * @method static static DeliveryExcepted()
 * @method static static Discontinued()
 */
final class ProductStockStatus extends Enum
{
    const NotAvailable = 0;
    const Available = 1;
    const DeliveryExcepted = 2;
    const Discontinued = 3;
}
