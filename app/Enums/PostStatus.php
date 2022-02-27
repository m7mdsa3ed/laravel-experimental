<?php

namespace App\Enums;

use App\Traits\EnumInvokable;

enum PostStatus: int
{
    use EnumInvokable;

    case PENDING = 1;
    case PUBLISHED = 2;
}
