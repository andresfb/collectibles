<?php

namespace Modules\Books\Dtos;

class AuthorInfo
{
    private function __construct()
    {
    }

    public static function create(): static
    {
        return new self();
    }
}
