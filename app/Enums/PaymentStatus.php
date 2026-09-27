<?php

namespace App\Enums;

use App\Enums\Traits\EnumValues;

enum PaymentStatus: int
{

    use EnumValues;

    case PENDING = 1;
    case COMPLETED = 2;
    case FAILED = 3;



    public function isPending(): bool
    {
        return $this == self::PENDING;
    }

    public function isCompleted(): bool
    {
        return $this == self::COMPLETED;
    }



    public function isFailed(): bool
    {
        return $this == self::FAILED;
    }
}
