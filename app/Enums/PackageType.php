<?php


namespace App\Enums;

use App\Enums\Traits\EnumValues;

enum PackageType: int
{

    use EnumValues;

    case REGULAR = 1;
    case SHOP = 2;



    public function isRegular(): bool
    {
        return $this === self::REGULAR;
    }

    public function isShop(): bool
    {
        return $this === self::SHOP;
    }
}
