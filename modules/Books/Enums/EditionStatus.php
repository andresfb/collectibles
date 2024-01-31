<?php

namespace Modules\Books\Enums;

use App\Traits\EnumArrayable;

enum EditionStatus: string
{
    use EnumArrayable;

    case ONHAND = 'on hand';
    case ONLINE = 'online';
    case DOWNLOADED = 'downloaded';
    case LENDED = 'lended';
    case DESTROYED = 'destroyed';
    case SOLD = 'sold';
    case DONATED = 'donated';
    case STORED = 'stored';
}
