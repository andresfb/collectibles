<?php

namespace Modules\Books\Enums;

use App\Traits\EnumArrayable;

enum GenreType: string
{
    use EnumArrayable;

    case BOOK = 'book';
    case LEGO = 'lego';
    case MUSIC = 'music';
    case ART = 'art';
}
