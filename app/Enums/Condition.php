<?php

namespace App\Enums;

use App\Traits\EnumArrayable;

enum Condition: string
{
    use EnumArrayable;

    case NEW = 'new';
    case USED = 'used';
    case DIGITAL = 'digital';
    case REFURBISHED = 'refurbished';
    case OPEN_BOX = 'open-box';
    case DAMAGED = 'damaged';
    case UNKNOWN = 'unknown';
    case OTHER = 'other';
    case PRINTED = 'printed';
}
