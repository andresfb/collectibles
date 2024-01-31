<?php

namespace App\Interfaces;

interface TypeCommandInterface
{
    public function create(string $typeCode): void;
}
