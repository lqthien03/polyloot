<?php


namespace App\Enums;

use App\Enums\Traits\EnumValues;

enum ListingStatus: string
{

    use EnumValues;

    case PENDING = 'pending';
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case SOLD = 'sold';
    case EXPIRED = 'expired';
    case DELETED = 'deleted';



    public static function getStatusColor(ListingStatus $status): string
    {
        return match ($status) {
            self::PENDING => 'gray',
            self::INACTIVE => 'warning',
            self::ACTIVE => 'success',
            self::SOLD => 'secondary',
            self::EXPIRED => 'secondary',
            self::DELETED => 'secondary',
            default => 'default',
        };
    }
}
