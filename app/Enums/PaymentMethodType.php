<?php

namespace App\Enums;

use App\Enums\Traits\EnumValues;

enum PaymentMethodType: string
{

    use EnumValues;

    case MOMO = 'momo';
    case BANK = 'bank';



    public function isMomo(): bool
    {
        return $this == self::MOMO;
    }

    public function isBank(): bool
    {
        return $this == self::BANK;
    }
}
