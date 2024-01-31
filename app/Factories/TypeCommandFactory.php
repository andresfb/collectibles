<?php

namespace App\Factories;

use App\Interfaces\TypeCommandInterface;
use Modules\Books\Libraries\Commands\BookCreateCommand;

final class TypeCommandFactory
{
    private static array $libraries = [
        'book' => BookCreateCommand::class,
    ];

    public static function getCommand(string $code): TypeCommandInterface
    {
        if (!array_key_exists($code, self::$libraries)) {
            throw new \RuntimeException("Library not found for: {$code}");
        }

        return resolve(self::$libraries[$code]);
    }
}
