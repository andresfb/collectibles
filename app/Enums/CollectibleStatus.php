<?php

namespace App\Enums;

use App\Traits\EnumArrayable;

enum CollectibleStatus: string
{
    use EnumArrayable;

    case CREATED = 'created';
    case AVAILABLE = 'available';
    case SOLD = 'sold';
    case DONATED = 'donated';
    case LOST = 'lost';
    case DAMAGED = 'damaged';
    case PLANED = 'planed';
    case PURCHASED = 'purchased';
    case ASSEMBLED = 'assembled';
    case DISASSEMBLED = 'disassembled';
    case INSTORAGE = 'storage';
    case PENDING = 'pending';
    case PHOTOGRAPHED = 'photographed';
    case PRINTED = 'printed';
    case FRAMED = 'framed';
}
